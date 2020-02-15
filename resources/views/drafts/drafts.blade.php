@extends('layouts.app')

@section('title', 'HE Hidro Extinción')

@section('body-class', 'landing-page')

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
@stop

@section('content')
    <!-- Proyectos -->
    <header class="" id="drafts">
        <div class="div_trans8">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="text-uppercase text-white font-weight-bold mb-4 mt-4">Proyectos</h2>
                    <h5 class="text-white ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                    <hr class="divider m-4">
                </div>
                <div class="row justify-content-center">
                    <div class="card col-md-3 m-2">
                        <a href="images/projects/project01.jpg" data-toggle="lightbox" data-gallery="projects-lightboxID1" data-title="Titulo del Proyecto" data-footer="algo del proyecto id" class="">
                            <img class="img-fluid card-img-top" src="./images/projects/project01.jpg" alt="">
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
                        <div class="card-body">
                            <h5 class="card-title">Nombre del Proyecto</h5>
                            <p class="card-text">Descripción.</p>
                        </div>
                    </div>
                    <div class="card col-md-3 m-2">
                        <a href="images/projects/project02.jpg" data-toggle="lightbox" data-gallery="projects-lightboxID2" data-title="Titulo del Proyecto" data-footer="algo del proyecto" class="">
                            <img class="img-fluid" src="./images/projects/project02.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Nombre del Proyecto</h5>
                            <p class="card-text">Descripción.</p>
                        </div>
                    </div>
                    <div class="card col-md-3 m-2">
                        <a href="images/projects/project03.jpg" data-toggle="lightbox" data-gallery="projects-lightboxID3" data-title="Titulo del Proyecto" data-footer="algo del proyecto" class="">
                            <img class="img-fluid" src="./images/projects/project03.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Nombre del Proyecto</h5>
                            <p class="card-text">Descripción.</p>
                        </div>
                    </div>
                </div>
            </div>
            <p>&nbsp;</p>
        </div>


        <div class="div_trans8">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="text-uppercase text-white font-weight-bold mb-4 mt-4">Proyectos</h2>
                    <h5 class="text-white ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                    <hr class="divider m-4">
                </div>
                <div class="card-deck p-2 mx-2 justify-content-center">
                    <div class="card  mx-auto">
                        <a href="images/projects/project01.jpg" data-toggle="lightbox" data-gallery="projects-lightboxID1" data-title="Titulo del Proyecto" data-footer="algo del proyecto id" class="">
                            <img class="img-fluid card-img-top" src="./images/projects/project01.jpg" alt="">
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
                        <div class="card-body">
                            <h5 class="card-title">Nombre del Proyecto</h5>
                            <p class="card-text">Descripción.</p>
                        </div>
                    </div>
                    <div class="card  mx-auto">
                        <a href="images/projects/project02.jpg" data-toggle="lightbox" data-gallery="projects-lightboxID2" data-title="Titulo del Proyecto" data-footer="algo del proyecto" class="">
                            <img class="img-fluid" src="./images/projects/project02.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Nombre del Proyecto</h5>
                            <p class="card-text">Descripción.</p>
                        </div>
                    </div>
                    <div class="card mx-auto">
                        <a href="images/projects/project03.jpg" data-toggle="lightbox" data-gallery="projects-lightboxID3" data-title="Titulo del Proyecto" data-footer="algo del proyecto" class="">
                            <img class="img-fluid" src="./images/projects/project03.jpg" alt="">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Nombre del Proyecto</h5>
                            <p class="card-text">Descripción.</p>
                        </div>
                    </div>

                </div>
            </div>
            <p>&nbsp;</p>
        </div>
    </header>
    <p>&nbsp;</p>

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
