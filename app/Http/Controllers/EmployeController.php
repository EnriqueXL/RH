<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
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
        if ($request->ajax()) {
            $users = Employe::select('*');
            return datatables()->of($users)
                ->addColumn('acciones', function ($row) {
                    return '
                        <a href="/employes/' . $row->id . '/edit" class="btn btn-sm"><i class="fas fa-edit"></i></a>
                        <button class="btn btn-sm" onclick="deleteEmploye(' . $row->id . ')"><i class="fas fa-trash-alt"></i></button>
                    ';
                })
                ->rawColumns(['acciones'])
                ->make(true);
        }
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
