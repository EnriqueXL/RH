@extends('layouts.app')

@section('css')
    <style>
        /* css custom page */
    </style>
@endsection

@section('title', 'Inicio')

@section('content')


    <div class= "description m-2 text-center">
        <h1>Micro CRM</h1>
        <p>
            <strong>Micro CRM</strong> es una aplicación web que permite gestionar la información de los empleados de una
            empresa.
        </p>
    </div>


<div class="container mt-4">
    <div class="row">
        <!-- Card 1: Total de Empleados -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Total de Empleados</h5>
                    <p class="card-text display-4">232</p>
                </div>
            </div>
        </div>
        <!-- Card 2: Empleados Activos -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Empleados Activos</h5>
                    {{-- <p class="card-text display-4">{{ $empleadosActivos }}</p> --}}
                    <p class="card-text display-4">131</p>
                </div>
            </div>
        </div>
        <!-- Card 3: Empleados Inactivos -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Empleados Inactivos</h5>
                    <p class="card-text display-4">23</p>
                </div>
            </div>
        </div>
    </div>
</div>
    

@endsection

@section('js')
    <script>
        //    alert('Home App');
    </script>
@endsection
