<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sacris</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <!-- Custom styles for this template-->
     <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">


    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/Welcomstyle.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

        @yield('css')

        <style>
            .active{
                background-color: #bcbcbd9d;
                
            }
        </style>
</head>
<body>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul style="background-color: #ffffff" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
                <div class=" rotate-n-0">
                    <img src="sacris.png"  style="width:200px;height:50px;">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 " style="color: #B9579C">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/home') }}" >
                    <i class="fas fa-home " style="color: #B9579C"></i>
                    <span class="" style="color: #B9579C">Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider " style="color: #B9579C">

            <!-- Heading -->
            <div class="sidebar-heading " style="color: #96477ea7">
                Interfaz
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a  href="{{ route('usuarios.index') }}" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo" class="{{request()->routeIs('usuarios.index') ? 'active' : ''}} nav-link ">
                    <i class="fas fa-users " style="color: #B9579C"></i>
                    <span class="" style="color: #B9579C">Usuarios</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('servicios.index') }}" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo" class="{{request()->routeIs('servicios.index') ? 'active' : ''}} nav-link ">
                    <i class="fas fa-square " style="color: #B9579C"></i>
                    <span class="" style="color: #B9579C">Servicios</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('tiposervicios.index') }}" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo" class="{{request()->routeIs('tiposervicios.index') ? 'active' : ''}} nav-link ">
                    <i class="fas fa-th-large" style="color: #B9579C"></i>
                    <span class="" style="color: #B9579C">Tipos de servicios</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu 
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>-->

            <!-- Divider 
            <hr class="sidebar-divider">-->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav style="background-color: #B9579C" class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn border border-light" style="background-color: #B9579C" type="button">
                                    <i class="fas fa-search fa-sm text-light"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
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

                    </ul>

                </nav>
                <!-- End of Topbar -->



        <main class="py-4">
            @yield('content')
            
        </main>
<div class="container">
        @yield('contenido')
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

    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/Welcomscript.js')}}"></script>
    <script src="js/sb-admin-2.min.js"></script>
    @yield('js')

</body>
</html>