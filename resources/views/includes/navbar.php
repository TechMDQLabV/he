
<nav class="navbar navbar-expand-lg navbar-dark mt-2 div_trans8 fixed-top">

        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarNavigate" aria-controls="navbarNavigate" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavigate">
            <ul class="navbar-nav mr-auto">
                <li>
                    <a class="navbar-brand" href="#"><img src="./images/he-logo.svg" class="img-responsive" width="200px" title="Inicio"></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#" title="Inicio"><span class="font24 t-red ml-2"><b>I</b></span>nicio</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#" title="Empresa"><span class="font24 t-red ml-2"><b>E</b></span>mpresa</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="font24 t-red ml-2"><b>S</b></span>ervicios</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item textext-white" href="#" title="Diseño y Cálculo"><i class="fa fa-fire-extinguisher t-red"></i>&nbsp;Diseño y Cálculo</a>
                        <a class="dropdown-item textext-white" href="#" title="Provisión de Equipamiento"><i class="fa fa-check t-red"></i>&nbsp;Provisión de Equipamiento</a>
                        <a class="dropdown-item textext-white" href="#" title="Instalaciones"><i class="fa fa-check t-red"></i>&nbsp;Instalaciones</a>
                        <a class="dropdown-item textext-white" href="#" title="Mantenimiento"><i class="fa fa-check t-red"></i>&nbsp;Mantenimiento</a>
                    </div>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="font24 t-red ml-2"><b>P</b></span>roductos</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item textext-white" href="#" title="Detección"><i class="fa fa-check t-red"></i>&nbsp;Detección</a>
                        <a class="dropdown-item textext-white" href="#" title="Extinción"><i class="fa fa-check t-red"></i>&nbsp;Extinción</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#projects" title="Proyectos"><span class="font24 t-red ml-2"><b>P</b></span>royectos</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link text-white" href="#contact" title="Contacto"><span class="font24 t-red ml-2"><b>C</b></span>ontacto</a>
                </li>
            </ul>
             <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Logggin') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> 
        </div>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar Producto" aria-label="Search">
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Buscar</button>
        </form>
</nav>

