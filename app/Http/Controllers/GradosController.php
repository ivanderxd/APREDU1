<?php

namespace App\Http\Controllers;
use App\Grados;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\CreateGradosRequest;
use Illuminate\Support\Facades\DB;

class GradosController extends Controller
{
    public function listGrados()
    {
        $grados = DB::table('grados')->paginate(3); 
        return view('grados', ['grados'=>$grados]);

    }


    public function viewCreateGrados()
    {
        return view('createGrados');
    }

    public function postCreateGrados(Request $request)
    {
       
        $grados=$request->validate([
            'grado' => ['required','regex:/^[0-9° ]+$/','unique:Grados,grado']
        ],[
            'grado.required'=>'El grado es obligatorio',
            'grado.unique'=>'El grado ya existe',
            'grado.regex'=>'El campo no permite algunos carácteres'
        ]);

        Grados::create([
            'grado'=>$grados['grado']
        ]);

        $message=alert()->success('Grado agregado correctamente');
        return redirect()->route('index.grados');

    }

    public function deleteGrados($id)
    {
        
        $grados = Grados::findOrFail($id);
           
        if($grados->delete()){
            $message=alert()->success('Grado eliminado correctamente');
            return redirect(route('index.grados',compact($message)));
        }
        else{
            return 'ocurrió algo inesperado ';
        }      
    }

    public function getEdit($id)
    {
        $grados = Grados::findOrFail($id);
        
        return view('editGrados', ['arrayGrados' => $grados]);
    }

    public function putEdit(Request $request, $id)
    {
        $grados = Grados::findOrFail($id);
        $grados->grado = $request->input('grado');      
        $grados->save(); 
        $message=alert()->success('Grado actualizado correctamente');
        return view('detailsGrados', ['arrayGrados' => $grados]);
    }

    public function getDetails($id)
    {
        $grados = Grados::findOrFail($id);
        return view('detailsGrados', ['arrayGrados' => $grados]);

    }


}
