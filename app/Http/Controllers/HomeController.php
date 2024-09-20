<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // llamando a la vista home, sustituyendo la funcion a __invoke. Solo consta de una sola funcion.
    public function __invoke(){
        return view('home');
    }
}
