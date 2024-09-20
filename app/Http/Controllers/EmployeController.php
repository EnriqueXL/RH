<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function __construct()
    {
        // Aplica el middleware de autenticación a todas las rutas del controlador
        $this->middleware('auth');
    }

    // Método para obtener todos los empleados
    public function index()
    {
        // Retorna la vista de todos los empleados
        return view('employe.all-employe');
    }

    // Método para crear un nuevo empleado
    public function create()
    {
        // Retorna la vista para crear un nuevo empleado
        return view('employe.create-employe');
    }
}
