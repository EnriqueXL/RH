<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>

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

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            @include('layouts.sidebar')

            <!-- Main content -->
            <div class="col p-5 main">

                <!-- nav -->
                    {{-- <nav class="navbar navbar-light bg-light">
                        <button class="toggle-btn" type="button">
                            <i class="fas fa-bars"></i>
                        </button>

                        <div class="text-center">
                            <h6 class="title">@yield('title', 'Home')</h6>
                        </div>
                        <div class="text-right">
                
                            <a href="" class="btn btn-light"> <i class="fas fa-chevron-left"></i></a>
                            @yield('nav-menu')
                        </div>
                    </nav> --}}
                <!-- end nav -->
                {{-- <div class=""> --}}
                    @yield('content')
                {{-- </div> --}}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    {{-- js global --}}
    <script src="{{ asset('js/script-global.js') }}"></script>
    {{-- js custom page --}}
    @yield('js')

</body>

</html>
