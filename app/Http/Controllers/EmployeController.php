<?php

namespace App\Http\Controllers;
use App\Services\EmployesService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{
    private $employesService;

    public function __construct(EmployesService $employesService)
    {
        $this->employesService = $employesService;
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

    public function apiAllEmployes(): JsonResponse
    {
        $employes = $this->employesService->getAllEmployes();
        return response()->json($employes['results']);
    }
}
