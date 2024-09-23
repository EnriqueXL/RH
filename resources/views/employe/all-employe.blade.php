@extends('layouts.app')

@section('css')
    <style>
        /* css custom page */
    </style>
@endsection

@section('title', 'Listado de empleados')

@section('content')
    <div class="container mt-5">
        <h2>Lista de Usuarios</h2>

        <!-- Formulario para buscar usuarios -->
        <form id="searchForm" method="GET" action="">
            <div class="input-group mb-3">
                <input type="text" id="search" name="search" class="form-control" placeholder="Buscar usuario..." value="{{ $search }}">
            </div>
        </form>

        <!-- Aquí definimos una sección para la tabla -->
        <div id="usersTable">
          <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha de Creación</th>
                    <th>Fecha de Actualización</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No se encontraron usuarios</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        </div>

        <!-- Paginación -->
        <div class="d-flex justify-content-center" id="paginationLinks">
            @yield('pagination')
        </div>
    </div>
@endsection

@section('usersTable')
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Actualización</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No se encontraron usuarios</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

@section('pagination')
    {{ $users->appends(['search' => $search])->links() }}
@endsection

@section('js')
    <script>
        let debounceTimeout;

        // Función para cargar la tabla de usuarios vía AJAX
        function loadUsers(url) {
            fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                // Actualiza el HTML de la tabla y la paginación
                document.getElementById('usersTable').innerHTML = data.html;
                document.getElementById('paginationLinks').innerHTML = data.pagination;

                // Reasigna el evento de clic para los enlaces de paginación
                assignPaginationLinks();
            })
            .catch(error => console.error('Error al cargar la tabla de usuarios:', error));
        }

        // Función para interceptar los enlaces de paginación
        function assignPaginationLinks() {
            document.querySelectorAll('#paginationLinks a').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    let url = this.href;
                    loadUsers(url);
                });
            });
        }

        // Asignar evento para el campo de búsqueda con debounce
        document.getElementById('search').addEventListener('input', function() {
            clearTimeout(debounceTimeout);

            debounceTimeout = setTimeout(() => {
                var searchQuery = this.value;
                var url = "{{ route('employes.index') }}?search=" + searchQuery;

                loadUsers(url);
            }, 300); // Espera 300ms después de que el usuario deja de escribir
        });

        // Asignar los enlaces de paginación al cargar la página
        assignPaginationLinks();
    </script>
@endsection
