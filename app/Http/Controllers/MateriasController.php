<?php

namespace App\Http\Controllers;
use App\Materias;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMateriasRequest;
use Illuminate\Support\Facades\DB;


class MateriasController extends Controller
{
    public function listMaterias()
    {
        $materias = Materias::paginate(3); 
        return view('materias', compact('materias'));

    }


    public function viewCreateMaterias()
    {
        return view('createMaterias');
    }

    public function postCreateMaterias(Request $request)
    {
       
        $materias=$request->validate([
            'nombre' => ['required','regex:/^[A-Za-z0-9ÁÉÍÓÚáéíóúñÑ ]+$/']
        ],[
            'nombre.required'=>'El nombre de la materia es obligatorio',
            'nombre.unique'=>'El nombre de la materia ya existe',
            'nombre.regex'=>'El campo no permite carácteres especiales'
        ]);

        Materias::create([
            'nombre'=>$materias['nombre']
        ]);

        $message=alert()->success('Materia creada correctamente');
        return redirect()->route('index.materias');

    }

    public function deleteMaterias($id)
    {
        
        $materias = Materias::findOrFail($id);
           
        if($materias->delete()){
            $message=alert()->success('Materia eliminada correctamente');
            return redirect(route('index.materias',compact($message)));
        }
        else{
            return 'ocurrió algo inesperado ';
        }      
    }

    public function getEdit($id)
    {
        $materias = Materias::findOrFail($id);
        
        return view('edit', ['arrayMaterias' => $materias]);
    }

    public function putEdit(Request $request, $id)
    {
        $materias = Materias::findOrFail($id);
        $materias->nombre = $request->input('nombre');      
        $materias->save(); 
        $message=alert()->success('Materia actualizada correctamente');
        return view('details', ['arrayMaterias' => $materias]);
    }

    public function getDetails($id)
    {
        $materias = Materias::findOrFail($id);
        return view('details', ['arrayMaterias' => $materias]);

    }


}
