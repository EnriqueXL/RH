<?php

namespace App\Http\Controllers;
use App\Models\Employe;

//Temporal al orm
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function __construct()
    {
        // Aplica el middleware de autenticación a todas las rutas del controlador
        $this->middleware('auth');
    }

    // Método para obtener todos los empleados
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $query = Employe::query();
    
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%');
        }
    
        $users = $query->paginate(10);
    
        // Respuesta para AJAX (solo la tabla con paginación)
        if ($request->ajax()) {
            return response()->json([
                'html' => view('employe.all-employe', compact('users', 'search'))->renderSections()['usersTable'],
                'pagination' => view('employe.all-employe', compact('users', 'search'))->renderSections()['pagination'],
            ]);
        }
    
        // Respuesta para la carga normal de la página completa
        return view('employe.all-employe', compact('users', 'search'));
    }
    
    
    

    // Método para crear un nuevo empleado
    public function create()
    {
        // Retorna la vista para crear un nuevo empleado
        return view('employe.create-employe');
    }
}
