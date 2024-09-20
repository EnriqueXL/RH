<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class EmployeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //obtener todos los empleados
    public function index()
    {
        return view('employe.all-employe');
    }
}
