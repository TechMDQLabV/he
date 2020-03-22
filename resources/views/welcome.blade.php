@extends('layouts.app')

@section('title', 'HE Hidro Extinción')

@section('body-class', 'landing-page')

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
@stop

@section('content')
    <!-- Masthead -->
    <header class="" id="enterprise">
        <div class="  div_trans8">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="text-uppercase text-white font-weight-bold mb-4 mt-4">Instalaciones contra incendio</h1>
                    <h5 class="text-white ">Protección de industrias, depósitos, cocheras, galpones, edificios y todo tipo de obras</h5>
                    <hr class="divider m-4">
                </div>
                <div class="col-lg-6 align-self-baseline">
                    <p class="text-white font-weight-light mb-5">Asesoramos, diseñamos y desarrollamos instalaciones fijas contra incendio</p>
                    <p class="text-white font-weight-light mb-5">Realizamos el mantenimiento y puesta en marcha de dichas instalaciones, adecuándolas a las necesidades de nuestros clientes</p>
                    <a class="btn btn-outline-danger mb-5" href="#services" title="Continuar">Continuar</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section class="" id="services">
        <div class="div_trans8 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 text-center">
                    <h2 class="text-white mt-3">Servicios</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <a href="{{ url('servicios/dyc') }}" title="Diseño y Cálculo">
                            <i class="fas fa-4x fa-drafting-compass text-danger mb-4"></i>
                            <h3 class="h4 mb-2 text-white">Diseño y Cálculo</h3>
                            <p class="text-white mb-0 m-3">Trabajos adaptados a la necesidad de cada cliente</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <a href="{{ url('servicios/provision') }}" title="Provisión de Equipamiento">
                            <i class="fas fa-4x fa-shipping-fast text-danger mb-4"></i>
                            <h3 class="h4 mb-2 text-white">Provisión de Equipamiento</h3>
                            <p class="text-white mb-0 m-3">Materiales adecuados a cada trabajo en particular</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <a href="{{ url('servicios/instalaciones') }}" title="Instalaciones">
                            <i class="fas fa-4x fa-tools text-danger mb-4"></i>
                            <h3 class="h4 mb-2 text-white">Instalaciones</h3>
                            <p class="text-white mb-0 m-3">Mano de obra calificada</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <a href="{{ url('servicios/mantenimiento') }}" title="Mantenimiento">
                            <i class="fas fa-4x fa-toolbox text-danger mb-4"></i>
                            <h3 class="h4 mb-2 text-white">Mantenimiento</h3>
                            <p class="text-white mb-0 m-3">Asesoramiento y mantenimiento con profesionales</p>
                        </a>
                    </div>
                </div>
            </div>
            <a class="btn btn-outline-light my-5" href="#projects" title="Proyectos">Proyectos</a>
        </div>
    </section>

    <!-- Projects Section only 3 proyects with card -->
    <section id="projects" class="">
        <div class="div_trans8 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 text-center">
                    <h2 class="text-white my-3">Proyectos</h2>
                </div>
            </div>
        <div class="row justify-content-center">
            @foreach($draftsWithImages as $draft)
                <div class="card col-md-3 m-2">
                    @foreach($draft->images as $image)
                        <a href="{{ asset($image->url) }}" data-toggle="lightbox" data-gallery="projects-lightbox{{ $draft->id }}" data-title="{{ $draft->title }}" data-footer="{{ $draft->description }}" class="">
                            <img class="img-fluid card-img-top {{ ($loop->first) ? "" : "d-none" }}" src="{{ asset($image->url) }}" alt="">
                        </a>
                    @endforeach
                    <div class="card-body">
                        <h5 class="card-title">{{ $draft->title }}</h5>
                        <p class="card-text" data-toggle="tooltip" data-html="true" title="{{ $draft->description }}">{{ Str::limit($draft->description,150,' ...') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
            <a class="btn btn-outline-light btn-xl js-scroll-trigger my-5" href="#contact" title="Contacto">Contacto</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="" id="contact">
        <div class="div_trans8">
            <div class="row justify-content-center">
                <div class="mt-3 col-lg-8 text-center">
                    <h2 class="text-white">Contacto</h2>
                    <hr class="divider my-4">
                    <p class="text-muted mb-5">Cotizaciones para toda la República Argentina</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 text-white">
                    <form class="contact-form" method="POST" action="{{ route('contact') }}">
                        {{ csrf_field() }}    
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">Nombre</label>
                                <input type="text" class="form-control" id="inputName" name="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Domicilio</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Calle 1234" name="address">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Ciudad</label>
                                <input type="text" class="form-control" id="inputCity" name="city">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputProvincia">Provincia</label>
                                <input type="text" class="form-control" id="inputProvincia" name='provincia'>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCPostal">C.Postal</label>
                                <input type="text" class="form-control" id="inputCPostal" name="cpostal">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-outline-light">Enviar</button>
                        </div>
                        <hr class="divider my-4">
                    </form>
                </div>
            </div>

        </div>
    </section>
    @include('includes.footer')

@stop

@section('scripts')
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
@stop
