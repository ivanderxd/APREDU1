<?php

namespace App\Http\Controllers;
use App\Tipomateriales;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\CreateTipoMaterialesRequest;
use Illuminate\Support\Facades\DB;

class TipoMaterialesController extends Controller
{
    public function listTipoMateriales()
    {
        $tipomateriales = DB::table('tipomateriales')->paginate(3); 
        return view('tipomateriales', ['tipomateriales'=>$tipomateriales]);

    }


    public function viewCreateTipoMateriales()
    {
        return view('createTipoMateriales');
    }

    public function postCreateTipoMateriales(Request $request)
    {
       
        $tipomateriales=$request->validate([
            'tipomaterial' => ['required','regex:/^[A-Za-z0-9ÁÉÍÓÚáéíóúñÑ ]+$/','unique:tipomateriales,tipomaterial']
        ],[
            'tipomaterial.required'=>'El tipo de material es obligatorio',
            'tipomaterial.unique'=>'Ese tipo de material ya existe',
            'tipomaterial.regex'=>'El campo no permite algunos carácteres'
        ]);

        Tipomateriales::create([
            'tipomaterial'=>$tipomateriales['tipomaterial']
        ]);

        $message=alert()->success('Tipo de material agregado correctamente');
        return redirect()->route('index.tipomateriales');

    }

    public function deleteTipoMateriales($id)
    {
        
        $tipomateriales = Tipomateriales::findOrFail($id);
           
        if($tipomateriales->delete()){
            $message=alert()->success('Tipo de material eliminado correctamente');
            return redirect(route('index.tipomateriales',compact($message)));
        }
        else{
            return 'ocurrió algo inesperado ';
        }      
    }

    public function getEdit($id)
    {
        $tipomateriales = Tipomateriales::findOrFail($id);
        
        return view('editTipoMateriales', ['arrayTipoMateriales' => $tipomateriales]);
    }

    public function putEdit(Request $request, $id)
    {
        $tipomateriales = Tipomateriales::findOrFail($id);
        $tipomateriales->tipomaterial = $request->input('tipomaterial');      
        $tipomateriales->save(); 
        $message=alert()->success('Tipo de material actualizado correctamente');
        return view('detailsTipoMateriales', ['arrayTipoMateriales' => $tipomateriales]);
    }

    public function getDetails($id)
    {
        $tipomateriales = Tipomateriales::findOrFail($id);
        return view('detailsTipoMateriales', ['arrayTipoMateriales' => $tipomateriales]);

    }

}
