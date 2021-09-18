<?php

namespace App\Http\Controllers;
use App\Materiales;
use App\Tipomateriales;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMaterialesRequest;
use Illuminate\Support\Facades\DB;


class MaterialesController extends Controller
{
    public function listMateriales()
    {
        $materiales = Materiales::paginate(3); 
        return view('materiales', compact('materiales'));

    }


    public function viewCreateMateriales()
    {
        $tipos = Tipomateriales::all(); 
        return view('createMateriales', compact('tipos'));
    }

    public function postCreateMateriales(Request $request)
    {
       
        $materiales=$request->validate([
            'nombre' => ['required','regex:/^[A-Za-z0-9ÁÉÍÓÚáéíóúñÑ ]+$/'],
            'descripcion' => ['required','regex:/^[A-Za-z0-9ÁÉÍÓÚáéíóúñÑ ]+$/'],
            'archivo' => ['required'],
            'tipo' => ['required']
        ],[
            'nombre.required'=>'El nombre del material es obligatorio',
            'nombre.regex'=>'El campo no permite carácteres especiales',
            'descripcion.required'=>'La descripción del material es obligatorio',
            'descripcion.regex'=>'El campo no permite carácteres especiales'
        ]);

        Materiales::create([
            'nombre'=>$materiales['nombre'],
            'descripcion'=>$materiales['descripcion'],
            'archivo'=>$materiales['archivo'],
            'tipo_id'=>$materiales['tipo']
            
        ]);

        $message=alert()->success('Material creado correctamente');
        return redirect()->route('index.materiales');

    }

    public function deleteMateriales($id)
    {
        
        $materiales = Materiales::findOrFail($id);
           
        if($materiales->delete()){
            $message=alert()->success('Material eliminado correctamente');
            return redirect(route('index.materiales',compact($message)));
        }
        else{
            return 'ocurrió algo inesperado ';
        }      
    }

    public function getEdit($id)
    {
        $materiales = Materiales::findOrFail($id);
        
        return view('editMateriales', ['arrayMateriales' => $materiales]);
    }

    public function putEdit(Request $request, $id)
    {
        $materiales = Materiales::findOrFail($id);
        $materiales->nombre = $request->input('nombre');
        $materiales->descripcion = $request->input('descripcion');      
        $materiales->save(); 
        $message=alert()->success('Material actualizado correctamente');
        return view('detailsMateriales', ['arrayMateriales' => $materiales]);
    }

    public function getDetails($id)
    {
        $materiales = Materiales::findOrFail($id);
        return view('detailsMateriales', ['arrayMateriales' => $materiales]);

    }


}
