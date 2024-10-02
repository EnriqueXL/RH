<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeController;

Route::get('/', HomeController::class)->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Obtener todos los empleados (datatable)
Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');

//Registrar empleados
Route::get('/employes/create', [EmployeController::class, 'create'])->name('employes.create');

//Obtener todos los empleados
Route::get('api/employes', [EmployeController::class, 'apiAllEmployes'])->name('employes.api');

require __DIR__.'/auth.php';
