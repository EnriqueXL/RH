<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado;

class EmployeController extends Controller
{
    public function index()
    {
        // return Empleado::all();
        return[
            'id' => 1,
            'name' => 'Juan',
            'email' => 'test.com',
            'created_at' => '2021-10-10 10:00:00',
            'updated_at' => '2021-10-10 10:00:00'
        ];
    }

    // public function store(Request $request)
    // {
    //     $empleado = Empleado::create($request->all());
    //     return response()->json($empleado, 201);
    // }

    // public function show($id)
    // {
    //     $empleado = Empleado::find($id);
    //     if ($empleado) {
    //         return response()->json($empleado);
    //     } else {
    //         return response()->json(['message' => 'Empleado no encontrado'], 404);
    //     }
    // }

    // public function update(Request $request, $id)
    // {
    //     $empleado = Empleado::find($id);
    //     if ($empleado) {
    //         $empleado->update($request->all());
    //         return response()->json($empleado);
    //     } else {
    //         return response()->json(['message' => 'Empleado no encontrado'], 404);
    //     }
    // }

    // public function destroy($id)
    // {
    //     $empleado = Empleado::find($id);
    //     if ($empleado) {
    //         $empleado->delete();
    //         return response()->json(['message' => 'Empleado eliminado']);
    //     } else {
    //         return response()->json(['message' => 'Empleado no encontrado'], 404);
    //     }
    // }
}