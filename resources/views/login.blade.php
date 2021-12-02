<!DOCTYPE html>
<html lang="en" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sacris - Login</title>

<!--fontawesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/Welcomstyle.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

</head>

<body class="" style="background-color: #B9579C">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block "><img src="{{asset('iglesia.jpg')}}"  style="width:500px;height:570px;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">

                                        <a class="navbar-brand" href="{{ url('/home') }}">
                                            <img src="{{asset('sacris.png')}}"  style="width:200px;height:50px;">
                                                </a>

                                    </div>


                                    <div id="app">
                                        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                                            <div class="container">
                                                <h1 class="h4 text-gray-900 mb-4">Bienvenido</h1>
                                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                                aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                                    <span class="navbar-toggler-icon"></span>
                                                </button>

                                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                    <!-- Left Side Of Navbar -->
                                                    <ul class="navbar-nav mr-auto">

                                                    </ul>

                                                    <!-- Right Side Of Navbar -->
                                                    <ul class="navbar-nav ml-auto">
                                                        <!-- Authentication Links -->
                                                        @guest
                                                            @if (Route::has('login'))
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                                </li>
                                                            @endif

                                                            @if (Route::has('register'))
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                                </li>
                                                            @endif
                                                        @else
                                                            <li class="nav-item dropdown">
                                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                    {{ Auth::user()->name }}
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                                       onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                                                        {{ __('Logout') }}
                                                                    </a>

                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                        @csrf
                                                                    </form>
                                                                </div>
                                                            </li>
                                                        @endguest
                                                    </ul>
                                                </div>

                                            </div>
                                        </nav>

                                        <main class="py-4">
                                            @yield('content')
                                        </main>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <script type="text/javascript">
        function mostrarPassword(){
                var cambio = document.getElementById("password");
                if(cambio.type == "password"){
                    cambio.type = "text";
                    $('.icon').removeClass('far fa-eye-slash').addClass('far fa-eye');
                }else{
                    cambio.type = "password";
                    $('.icon').removeClass('far fa-eye').addClass('far fa-eye-slash');
                }
            } 
            
            
        </script>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/Welcomscript.js')}}"></script>
</body>

</html>
