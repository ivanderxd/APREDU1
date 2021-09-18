<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class RoutesPageController extends Controller
{
    public function offline(){
        return view('vendor\laravelpwa\offline');
    }

    public function contenidos(){
        return view('Contenidos');
    }

    public function nosotros(){
        return view('Nosotros');
    }

    public function contacto(){
        return view('Contacto');
    }
}
