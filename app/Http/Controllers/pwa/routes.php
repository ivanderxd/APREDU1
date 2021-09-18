<?php

namespace App\Http\Controllers\pwa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class routes extends Controller
{
    public function offline(){
        return view('laravelpwa\offline');
    }

    public function contenidos(){
        return view('contenidos');
    }

    public function nosotros(){
        return view('nosotros');
    }

    public function contacto(){
        return view('contacto');
    }
}
