<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $user=Auth::user()->tipo;
        if ($user=='administrador') {
            return view('home');
        }
        if($user=='estudiante') {
            return view('estudiante.index');
        }
        else {
            return view('docente.index');
        }
    }
}
