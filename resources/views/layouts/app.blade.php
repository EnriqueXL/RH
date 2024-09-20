<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>

    {{-- LineIcons --}}
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    {{-- FontAwesome --}}
    <script src="https://kit.fontawesome.com/e3b4af92a1.js" crossorigin="anonymous"></script>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    {{-- css custom global --}}
    <link rel="stylesheet" href="{{ asset('css/style-global.css') }}">

    {{-- css custom page --}}
    @yield('css')

</head>

<body>

    <div class="wrapper d-flex">
        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main content -->
        <div class="main w-100">
            <!-- nav -->
            <nav class="navbar">
                <!-- volver al inicio (home)-->
                <div class="text-left">
                    <h6 class="title text-uppercase">@yield('title', 'Home')</h6>
                </div>
                
                <div class="text-right">
                    <a href="{{ route('home') }}" class="navbar-brand"><i class="fa-solid fa-house"></i></a>
                    <a href="" class="navbar-brand"><i class="fa-solid fa-chevron-left"></i></a>
                    @yield('nav-menu')
                </div>
            
            </nav>
            <!-- end nav -->

            <!-- Page content -->
            <div class="container-fluid px-3">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    {{-- js global --}}
    <script src="{{ asset('js/script-global.js') }}"></script>

    {{-- js custom page --}}
    @yield('js')

</body>

</html>
