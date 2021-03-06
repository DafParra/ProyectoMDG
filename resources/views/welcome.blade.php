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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <!-- Core theme CSS (includes Bootstrap)-->

        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-purple shadow-sm">
            <div class="container">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
                    <div class="sidebar-brand-icon rotate-n-0">
                        <img src="sacris.png"  style="width:200px;height:50px;">
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
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



    <div class="container">
        @yield('contenido')
    </div>
<!-- Area Chart -->
<div class="col-xl-8 col-lg-6">
    <div class="card shadow mb-6">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h4 class="m-0 font-weight-bold text-primary"> PARROQUIA  MADRE DE LA DIVINA GRACIA</h4>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-area">

                <p>
                Erigida can??nicamente mediante Decreto 376 del 21 de marzo de 1991 por Monse??or Mario Revollo Bravo,
                Arzobispo de la Arquidi??cesis de Bogot?? y de la Zona Pastoral Episcopal de la Sagrada Eucarist??a, en su momento.
                En el a??o 2003, pasamos a ser jurisdicci??n de la Di??cesis de Engativ??, creada el 06 de agosto de 2003.</p>
            </div>
        </div>
    </div>
    <div class="card shadow mb-6">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h4 class="m-0 font-weight-bold text-primary"> ORACI??N MADRE DE LA DIVINA GRACIA</h4>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-area">

                <p>
                Se??or, por el misterioso designio de tu amor, has querido que la Virgen Mar??a fuese madre del autor de la gracia
                y estuviese asociada a ??l en el misterio de la redenci??n humana; permite que ella nos alcance con abundancia tus dones
                y nos conduzca hasta la salvaci??n eterna. Por Jesucristo Nuestro Se??or. Am??n.

            </p>
            </div>
        </div>
    </div>
</div>
<!-- Area Chart -->
<div class="col-xl-8 col-lg-12">
    <div class="card shadow mb-6">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h4 class="m-0 font-weight-bold text-primary">ORIGEN DEL NOMBRE</h4>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-area">

                <p>
                    Esta advocaci??n significa dos cosas: que es Madre de Cristo (la Gracia Suprema) y que es mediadora de todas las gracias.
                    Cristo, manantial de la divina Gracia. Mar??a, Madre de Cristo, Madre de la Divina Gracia.

                    Por el "S??" de Mar??a pronunciado ante el ??ngel Gabriel, Jesucristo se encarn??, y haci??ndose hombre hizo posible que la
                    humanidad volviera a participar de la Gracia de Dios, entonces Mar??a es tambi??n la Madre de esa gracia divina. Pero,
                    ??qu?? es realmente la gracia? Es todo don que recibimos "gratuitamente" (por eso se llama gracia) de Dios. Ahora bien,
                    no tienes que imaginar la gracia como algo indefinido que se desprende de Dios y llega a nosotros de alguna manera;
                    la gracia divina es Dios mismo que se hace don y se entrega a nosotros. Ese don es, ante todo, Jesucristo,
                    a quien el Padre nos envi?? para que se entregara por nosotros y viviera en nuestro coraz??n por siempre.
                    Estar en gracia de Dios es participar de su misma presencia en nosotros. "Yo soy la vida", dijo Jes??s;
                    y en otra ocasi??n dijo tambi??n: "Yo vine para que todos tengan vida y la tengan en abundancia".
                    Tener vida es poseer a Jes??s, ser parte de su intimidad divina, de su infinito amor.
                    El gran regalo de la redenci??n es el Amor mismo de Dios hecho don para el hombre.

                     Ese Amor que es el Esp??ritu Santo, la tercera persona de la Sant??sima Trinidad.
                     Por eso San Pablo nos recordar??a que "somos templo del Esp??ritu Santo", y nos invitar??a a tratar nuestro cuerpo como el lugar donde habita Dios.
                     Por eso se te ha dicho, desde que eras ni??o, que lo m??s importante en nuestra vida es conservar la gracia santificante.</p>
            </div>
        </div>
    </div>
    <div class="card shadow mb-6">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h4 class="m-0 font-weight-bold text-primary"> INICIO DE LA PARROQUIA</h4>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-area">

                <p>
                    En el a??o 1989 el p??rroco de la Inmaculada Concepci??n de Suba, Enrique Buritic??, solicit?? la segregaci??n del barrio Tibabuyes,
                    las Flores, El Poa, Santa B??rbara, Villamar??a, entre otros para la  creaci??n de la nueva parroquia,
                    debido al crecimiento de la poblaci??n y para atenderla pastoralmente.

                    Erigida can??nicamente mediante Decreto 376 del 21 de marzo de 1991.
            </p>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-8 col-lg-12">
    <div class="card shadow mb-6">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h4 class="m-0 font-weight-bold text-bs-purple"> PARROCOS</h4>
        </div>
        <!-- Card Body -->
        <div class="card-body col-lg-4">
            <div class="flip-card ">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="parroco1.jpg"  style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back ">
                        <h2 class="mt-5">MARIO ALONSO MAR??N URIBE</h2>
                        <p class="mt-3">ENERO 9 DE 1989 A ENERO 9 DE 1992</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body col-lg-4">
            <div class="flip-card ">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="parroco3.jpg"  style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back ">
                        <h2 class="mt-5">DANIEL SALDARRIAGA MOLINA</h2>
                        <p class="mt-3">ENERO 10  DE 1992 A DICIEMBRE 30 2002
                            </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body col-lg-4">
            <div class="flip-card ">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="parroco4.jpg"  style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back ">
                        <h2 class="mt-5">SANTIAGO JANER SARMIENTO</h2>
                        <p class="mt-3">DICIEMBRE 30 DE 2002 A AGOSTO 16 DE 2005</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body col-lg-4">
            <div class="flip-card ">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="parroco5.jpg"  style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back ">
                        <h2 class="mt-5">HUMBERTO JAVIER BERNAL BURGOS</h2>
                        <p class="mt-3">AGOSTO 16 DE 2005 A FEBRERO 13 DE 2015</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body col-lg-4">
            <div class="flip-card ">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="parroco6.jpg"  style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back ">
                        <h2 class="mt-5">PADRE RICARDO VELANDIA CARRE??O</h2>
                        <p class="mt-3">FEBRERO 13 DE 2015 A FEBRERO 12 DE 2018</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body col-lg-4">
            <div class="flip-card ">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="parroco2.jpg"  style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back ">
                        <h2 class="mt-5">PADRE ALEXANDER HERN??NDEZ VEL??SQUEZ</h2>
                        <p class="mt-3">FEBRERO 12 DE 2018 Y ACTUAL P??RROCO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="card shadow mb-6">
    <!-- Card Header - Dropdown -->
    <div
        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary"> EUCARISTIAS</h4>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="chart-area">

            <div class="blog-card">
                <div class="meta">
                  <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
                  <ul class="details">
                    <li class="author"><a href="#">servicios</a></li>
                    <li class="date">Padre Alejandro Fuentes</li>

                  </ul>
                </div>
                <div class="description">
                  <h1>Eucaristia Comunitaria</h1>
                  <h2>Haz la peticion de una eucaristia</h2>
                  <p> Estas son eucaristias comunitarias las cuales se debe pagar una suma voluntaria que no baje de 30 mil pesos</p>
                  <p class="read-more">
                    <a href="#">Leer mas</a>
                  </p>
                </div>
              </div>
        </div>
    </div>
    <div class="card-body">
        <div class="chart-area">

            <div class="blog-card alt">
        <div class="meta">
          <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-2.jpg)"></div>
          <ul class="details">
            <li class="author"><a href="#"></a>Eucaristia Particular</li>
            <li class="date">Padre Alejandro Fuentes</li>
          </ul>
        </div>
        <div class="description">
          <h1>Eucaristias Particulares</h1>
          <h2>Haz la peticion de una eucaristia</h2>
          <p>Estas son eucaristias particulares la cuales se debe pagar no menos de 60.000 y son privadas solo para tu familia y allegados</p>
          <p class="read-more">
            <a href="#">leer mas</a>
          </p>
        </div>
      </div>
        </div>
    </div>
</div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/Welcomscript.js')}}"></script>


</body>
</html>
