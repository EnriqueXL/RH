<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeController;

// Rutas API para empleados

Route::get('/employes', [EmployeController::class, 'index'])->name('api.employes.index');
Route::post('/employes', [EmployeController::class, 'store'])->name('api.employes.store');
Route::get('/employes/{id}', [EmployeController::class, 'show'])->name('api.employes.show');
Route::put('/employes/{id}', [EmployeController::class, 'update'])->name('api.employes.update');
Route::delete('/employes/{id}', [EmployeController::class, 'destroy'])->name('api.employes.destroy');
