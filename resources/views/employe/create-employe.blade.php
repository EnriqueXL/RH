@extends('layouts.app')

@section('css')
    <style>
        /* css custom page */
        /* Estilos adicionales para el formulario */
        .form-group {
            margin-bottom: 1rem;
        }

        .text-danger {
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        /* Ocultar el formulario inicialmente */
        /* #employee-form {
            display: none;
        } */
    </style>
@endsection

@section('title', 'Crear empleado')

@section('content')

    <!-- Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Subir Archivo RAR</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="upload-form" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="rar-file" class="form-label">Seleccione un archivo RAR para extraer los datos con IA.</label>
                            <input type="file" class="form-control" id="rar-file" name="rar-file" accept=".rar" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Subir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario de empleado -->
    <div id="employee-form">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" placeholder="Nombre">
                        @error('nombre')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="apellido_materno">Apellido Materno:</label>
                        <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" value="{{ old('apellido_materno') }}" placeholder="Apellido Materno">
                        @error('apellido_materno')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="apellido_paterno">Apellido Paterno:</label>
                        <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" value="{{ old('apellido_paterno') }}" placeholder="Apellido Paterno">
                        @error('apellido_paterno')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Correo:</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Correo electrónico">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono') }}" maxlength="10" placeholder="Teléfono">
                        @error('telefono')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" name="direccion" id="direccion" class="form-control" value="{{ old('direccion') }}" placeholder="Dirección">
                        @error('direccion')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento') }}">
                        @error('fecha_nacimiento')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="puesto">Puesto:</label>
                        <select name="id_rol" id="id_rol" class="form-control">
                            <option value="">Seleccione un puesto:</option>
                            <option value="1" {{ old('id_rol') == 1 ? 'selected' : '' }}>Sistemas</option>
                            <option value="2" {{ old('id_rol') == 2 ? 'selected' : '' }}>Supervisor</option>
                            <option value="3" {{ old('id_rol') == 3 ? 'selected' : '' }}>Guardia</option>
                        </select>
                        @error('id_rol')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Enviar</button>
                    <a href="{{ route('home') }}" class="btn btn-light">Cancelar</a>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mostrar el modal al cargar la página
            var uploadModal = new bootstrap.Modal(document.getElementById('uploadModal'));
            uploadModal.show();

            // Manejar el envío del formulario de subida
            document.getElementById('upload-form').addEventListener('submit', function(e) {
                e.preventDefault();
                // lógica para procesar el archivo RAR
                // ocultar el modal y mostramos el formulario
                uploadModal.hide();
                document.getElementById('employee-form').style.display = 'block';
            });
        });
    </script>
@endsection