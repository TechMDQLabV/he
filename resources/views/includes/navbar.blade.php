
<nav class="navbar navbar-expand-lg navbar-dark mt-2 div_trans9 fixed-top">

        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarNavigate" aria-controls="navbarNavigate" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavigate">
            <ul class="navbar-nav mr-auto">
                <li>
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('./images/he-logo.svg') }}" class="img-responsive" width="200px" title="Inicio"></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if (Request::path()!='/')
                <li class="nav-item ">
                    <a class="nav-link text-white" href="{{ url('/') }}" title="Inicio"><span class="font24 t-red ml-2"><b>I</b></span>nicio</a>
                </li>
                @endif
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#" title="Empresa"><span class="font24 t-red ml-2"><b>E</b></span>mpresa</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="font24 t-red ml-2"><b>S</b></span>ervicios</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item textext-white" href="#" title="Diseño y Cálculo"><i class="fa fa-check t-red"></i>&nbsp;Diseño y Cálculo</a>
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
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contact" title="Contacto"><span class="font24 t-red ml-2"><b>C</b></span>ontacto</a>
                </li>

                @if (Auth::check())
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="font24 t-red ml-2"><b>A</b></span>dministrador</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item textext-white" href="{{ url('/admin/drafts') }}" title="Proyectos"><i class="fas fa-drafting-compass t-red"></i>&nbsp;Proyectos</a>
                            <a class="dropdown-item textext-white" href="{{ url('/admin/products') }}" title="Productos"><i class="fab fa-product-hunt t-red"></i>&nbsp;Productos</a>
                            <a class="dropdown-item textext-white" href="{{ route('logout') }}" title="Log Out"><i class="fas fa-sign-out-alt t-red"></i>&nbsp;Cerrar Cesión</a>
                        </div>
                    </li>
                    @else
                    <li class="nav-item mr-4">
                        <a class="nav-link text-white" href="{{ url('login') }}" title="Log-In"><span class="font24 t-red ml-2"><b>I</b></span>ngresar</a>
                    </li>
                @endif
            </ul>
        </div>
        @if(Request::path()=='productos')
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar Producto" aria-label="Search">
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Buscar</button>
        </form>
            @endif
</nav>

