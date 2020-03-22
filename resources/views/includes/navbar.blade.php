
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
                    <a class="nav-link text-white" href="{{ url('/') }}" title="Inicio">Inicio</a>
                </li>
                @endif
                <li class="nav-item ">
                    <a class="nav-link text-white" href="{{ url('/') }}" title="Empresa">Empresa</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/servicios/dyc') }}" title="Diseño y Cálculo"><i class="fa fa-check t-red"></i>&nbsp;Diseño y Cálculo</a>
                        <a class="dropdown-item" href="{{ url('/servicios/provision') }}" title="Provisión de Equipamiento"><i class="fa fa-check t-red"></i>&nbsp;Provisión de Equipamiento</a>
                        <a class="dropdown-item" href="{{ url('/servicios/instalaciones') }}" title="Instalaciones"><i class="fa fa-check t-red"></i>&nbsp;Instalaciones</a>
                        <a class="dropdown-item" href="{{ url('/servicios/mantenimiento') }}" title="Mantenimiento"><i class="fa fa-check t-red"></i>&nbsp;Mantenimiento</a>
                    </div>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/productos/deteccion') }}" title="Detección"><i class="fa fa-check t-red"></i>&nbsp;Detección</a>
                        <a class="dropdown-item" href="{{ url('/productos/extincion') }}" title="Extinción"><i class="fa fa-check t-red"></i>&nbsp;Extinción</a>
                        <a class="dropdown-item" href="{{ url('/productos/listado') }}" title="Listado"><i class="fa fa-check t-red"></i>&nbsp;Listado</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="{{ url('/drafts') }}" title="Proyectos">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/contacto') }}" title="Contacto">Contacto</a>
                </li>

                @if (Auth::check())
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ url('/admin/drafts') }}" title="Proyectos"><i class="fas fa-drafting-compass t-red"></i>&nbsp;Proyectos</a>
                            <a class="dropdown-item" href="{{ url('/admin/products') }}" title="Productos"><i class="fab fa-product-hunt t-red"></i>&nbsp;Productos</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" title="Log Out"><i class="fas fa-sign-out-alt t-red"></i>&nbsp;Cerrar Cesión</a>
                        </div>
                    </li>
                    @else
                    <li class="nav-item mr-4">
                        <a class="nav-link text-white" href="{{ url('login') }}" title="Log-In"><i class="fas fa-sign-in-alt t-red"></i>&nbsp;Ingresar</a>
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

