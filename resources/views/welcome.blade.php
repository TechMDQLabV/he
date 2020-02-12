@extends('layouts.app')

@section('title', 'HE Hidro Extinción')

@section('body-class', 'landing-page')

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">

@stop

@section('content')
    <!-- Masthead -->
    <header class="masthead mt-5" id="enterprise">
        <div class=" h-100 div_trans8">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold mb-4 mt-4">Líder en instalaciones contra incendio</h1>
                    <h5 class="text-white ">Protección de industrias, depósitos, centos de logístaca y obras</h5>
                    <hr class="divider m-4">
                </div>
                <div class="col-lg-6 align-self-baseline">
                    <p class="text-white font-weight-light mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?</p>
                    <p class="text-white font-weight-light mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?</p>
                    <a class="btn btn-outline-danger btn-xl js-scroll-trigger mb-5" href="#products" title="Continuar">Continuar</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Products Section -->
    <section class="page-section" id="products">
        <div class="bg-danger">
            <div class="row justify-content-center">
                <div class="col-lg-8 justify-content-center text-center">
                    <h2 class="text-white mt-2">Productos</h2>
                    <hr class="divider light my-4">
                    <h4 class="text-white mt-2">Todo lo que necesita</h4>
                    <p class="text-white-50 mb-4">Para su seguridad y la de su empresa</p>
                    <div class="row justify-content-center">
                         <div id="carouselExampleFade" class="carousel slide carousel-fade col-lg-10" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="w-50 img-fluid" src="./images/products/boquillas.jpg?auto=yes">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-50 img-fluid" src="./images/products/equipo-de-bombas.jpg?auto=yes">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="./images/products/gabinete.jpg?auto=yes">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="./images/products/lanza-chorro-pleno-niebla.jpg?auto=yes">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="./images/products/lanzas.jpg?auto=yes">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="./images/products/rociadores.jpg?auto=yes">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="./images/products/tapa-boca-de-impulsion.jpg?auto=yes">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="./images/products/union-tipo-mandrilar.jpg?auto=yes">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="./images/products/union-tipo-storz.jpg?auto=yes">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="./images/products/valvula-tipo-teatro.jpg?auto=yes">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <a class="btn btn-outline-light btn-xl js-scroll-trigger mt-5 mb-5" href="#services" title="Servicios">Servicios</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="page-section" id="services">
        <div class="div_trans8 pb-5 text-center">
            <h2 class="text-center mt-0"></h2>
            <hr class="divider my-4">

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 text-center">
                    <h2 class="text-white mt-3">Servicios</h2>
                    <hr class="divider my-4">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-drafting-compass text-danger mb-4"></i>
                        <h3 class="h4 mb-2 text-white">Diseño y Cálculo</h3>
                        <p class="text-white mb-0 m-3">Con el personal más capacitado del país</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-shipping-fast text-danger mb-4"></i>
                        <h3 class="h4 mb-2 text-white">Provisión de Equipamiento</h3>
                        <p class="text-white mb-0 m-3">Los materiales adecuados a sus necesidades</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-tools text-danger mb-4"></i>
                        <h3 class="h4 mb-2 text-white">Instalaciones</h3>
                        <p class="text-white mb-0 m-3">Instalaciones de calidad superior</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-toolbox text-danger mb-4"></i>
                        <h3 class="h4 mb-2 text-white">Mantenimiento</h3>
                        <p class="text-white mb-0 m-3">Mantenimiento adecuado</p>
                    </div>
                </div>
            </div>
            <a class="btn btn-outline-light btn-xl js-scroll-trigger mt-5 mb-2" href="#projects" title="Proyectos">Proyectos</a>
        </div>
    </section>

     <!-- Projects Section only 3 proyects with title -->
        <section id="projects" class="">
            <div class="div_trans8 pb-5 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center">
                        <h2 class="text-white mt-3">Proyectos</h2>
                    </div>
                </div>
                <div class="row no-gutters text-left">
                    <div class="col-lg-4 col-sm-6 mt-4">
                        <h5 class="text-white-50 ml-2">Nombre del Proyecto</h5>
                    </div>

                    <div class="col-lg-4 col-sm-6 mt-4">
                        <h5 class="text-white-50 ml-2">Nombre del Proyecto</h5>
                    </div>

                    <div class="col-lg-4 col-sm-6 mt-4">
                        <h5 class="text-white-50 ml-2">Nombre del Proyecto</h5>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6 mt-2">
                        <a href="images/projects/project01.jpg" data-toggle="lightbox" data-gallery="projects-lightboxID1" data-title="Titulo del Proyecto" data-footer="algo del proyecto id" class="">
                            <img class="img-fluid" src="./images/projects/project01.jpg" alt="">
                        </a>
                        <a href="images/projects/project0101.jpg" data-toggle="lightbox" data-gallery="projects-lightboxID1" data-title="Titulo del Proyecto" data-footer="algo del proyecto id" class="">
                            <img class="img-fluid d-none" src="./images/projects/project0101.jpg" alt="">
                        </a>
                        <a href="images/projects/project0102.jpg" data-toggle="lightbox" data-gallery="projects-lightboxID1" data-title="Titulo del Proyecto" data-footer="algo del proyecto id" class="">
                            <img class="img-fluid d-none" src="./images/projects/project0102.jpg" alt="">
                        </a>
                        <a href="images/projects/project0103.jpg" data-toggle="lightbox" data-gallery="projects-lightboxID1" data-title="Titulo del Proyecto" data-footer="algo del proyecto id" class="">
                            <img class="img-fluid d-none" src="./images/projects/project0103.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 mt-2">
                        <a href="images/projects/project02.jpg" data-toggle="lightbox" data-gallery="projects-lightbox" data-title="Titulo del Proyecto" data-footer="algo del proyecto" class="">
                            <img class="img-fluid" src="./images/projects/project02.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 mt-2">
                        <a href="images/projects/project03.jpg" data-toggle="lightbox" data-gallery="projects-lightbox" data-title="Titulo del Proyecto" data-footer="algo del proyecto" class="">
                            <img class="img-fluid" src="./images/projects/project03.jpg" alt="">
                        </a>
                    </div>
                </div>
                <a class="btn btn-outline-light btn-xl js-scroll-trigger mt-5" href="#contact" title="Contacto">Contacto</a>
            </div>
        </section>

    <!-- Projects Section -->
    <section id="projects" class="">
        <div class="div_trans8 pb-5 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 text-center">
                    <h2 class="text-white mt-3">Proyectos</h2>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6 mt-4">
                    <a href="images/projects/project01.jpg" data-toggle="lightbox" data-gallery="projects-lightbox" data-title="Titulo del Proyecto" data-footer="algo del proyecto" class="">
                        <img class="img-fluid" src="./images/projects/project01.jpg" alt="">
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <a href="images/projects/project02.jpg" data-toggle="lightbox" data-gallery="projects-lightbox" data-title="Titulo del Proyecto" data-footer="algo del proyecto" class="">
                        <img class="img-fluid" src="./images/projects/project02.jpg" alt="">
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6 mt-4">
                    <a href="images/projects/project03.jpg" data-toggle="lightbox" data-gallery="projects-lightbox" data-title="Titulo del Proyecto" data-footer="algo del proyecto" class="">
                        <img class="img-fluid" src="./images/projects/project03.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6">
                    <a href="images/projects/project04.jpg" data-toggle="lightbox" data-gallery="projects-lightbox" data-title="Titulo del Proyecto" data-footer="algo del proyecto" class="">
                        <img class="img-fluid" src="./images/projects/project04.jpg" alt="">
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a href="images/projects/project05.jpg" data-toggle="lightbox" data-gallery="projects-lightbox" data-title="Titulo del Proyecto" data-footer="algo del proyecto" class="">
                        <img class="img-fluid" src="./images/projects/project05.jpg" alt="">
                    </a>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <a href="images/projects/project06.jpg" data-toggle="lightbox" data-gallery="projects-lightbox" data-title="Titulo del Proyecto" data-footer="algo del proyecto" class="">
                        <img class="img-fluid" src="./images/projects/project06.jpg" alt="">
                    </a>
                </div>
            </div>
            <a class="btn btn-outline-light btn-xl js-scroll-trigger mt-5" href="#contact" title="Contacto">Contacto</a>
        </div>
    </section>

        <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class=" div_trans8">
            <div class="row justify-content-center">
                <div class="mt-3 col-lg-8 text-center">
                    <h2 class="text-white">Contacto</h2>
                    <hr class="divider my-4">
                    <p class="text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 text-white">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">Nombre</label>
                                <input type="text" class="form-control" id="inputName">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Domicilio</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Calle 1234">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Ciudad</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputProvincia">Provincia</label>
                                <input type="text" class="form-control" id="inputProvincia">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputCPostal">C.Postal</label>
                                <input type="text" class="form-control" id="inputCPostal">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-outline-light">Enviar</button>
                        </div>
                        <hr class="divider my-4">
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div class="text-white-50">+1 (202) 555-0149</div>
                </div>
                <div class="col-lg-3 mr-auto text-center mb-5">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <a class="d-block" href="mailto:contact@yourwebsite.com">contact@he-hidro.com</a>
                </div>
                <div class="col-lg-3 mr-auto text-center mb-5">
                    <i class="fab fa-whatsapp fa-3x mb-3 text-muted"></i>
                    <div class="text-white-50">+1 (202) 555-0149</div>
                </div>
                <div class="col-lg-3 mr-auto text-center mb-5">
                    <i class="fab fa-facebook fa-3x mb-3 text-muted"></i>
                    <div class="text-white-50">tu facebook</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-danger py-1">
        <div class="container">
            <div class="small text-center text-white">Copyright &copy; 2019 - HE Hidro Extinción</div>
        </div>
    </footer>

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
