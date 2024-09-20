<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // llamando a la vista home, sustituyendo la funcion a __invoke. Solo consta de una sola funcion.
    public function home(){
        return view('home');
    }
}
