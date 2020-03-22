@extends('layouts.app')

@section('title', 'HE Hidro Extinción')

@section('body-class', 'landing-page')

@section('styles')

@stop

@section('content')

    @if (isset($anchor))
        <input type="hidden" name="anchor" value="{{ $anchor }}">
    @endif

    <!-- Deteccion -->
    <section class="" id="deteccion">
        <div class="div_trans8">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="text-uppercase text-white font-weight-bold mb-4 mt-4">Detección</h2>
                    <p class="text-white font-weight-light mb-5"></p>
                    <p class="text-white font-weight-light mb-5"></p>
                    <h5 class="text-white ">Proveemos todo tipo de productos para la detección y alarma de incendios. Cubrimos desde la instalación de los mismos hasta la provisión de repuestos de líneas existentes.</h5>
                    <hr class="divider m-4">
                </div>
                <div class="col-lg-6 align-self-baseline">
                    <p class="text-white font-weight-light mb-5"></p>
                    <p class="text-white font-weight-light mb-5"></p>
                    <a class="btn btn-outline-danger btn-xl js-scroll-trigger mb-5" href="#extincion" title="Continuar">Continuar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Extincion -->
    <section class="masthead mt-5" id="extincion">
        <div class=" h-100 div_trans8">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h2 class="text-uppercase text-white font-weight-bold mb-4 mt-4">Extinción</h2>
                    <p class="text-white font-weight-light mb-5"></p>
                    <p class="text-white font-weight-light mb-5"></p>
                    <h5 class="text-white ">Contamos una completa gama de productos para cubrir todo tipo de instalación para la lucha contra incendios. Desde instalaciones con hidrantes, sprinklers, CO2, líneas húmedas o secas, etc.</h5>
                    <hr class="divider m-4">
                </div>
                <div class="col-lg-6 align-self-baseline">
                    <p class="text-white font-weight-light mb-5"></p>
                    <p class="text-white font-weight-light mb-5"></p>
                    <a class="btn btn-outline-danger btn-xl js-scroll-trigger mb-5" href="#carousel" title="Continuar">Continuar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Carousel Section -->
    <section class="page-section" id="carousel">
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
                                    <img class="w-50 img-fluid" src="{{ asset('images/products/boquillas.jpg?auto=yes') }}">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-50 img-fluid" src="{{ asset('images/products/equipo-de-bombas.jpg?auto=yes') }}">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="{{ asset('images/products/gabinete.jpg?auto=yes') }}">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="{{ asset('images/products/lanza-chorro-pleno-niebla.jpg?auto=yes') }}">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="{{ asset('images/products/lanzas.jpg?auto=yes') }}">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="{{ asset('images/products/rociadores.jpg?auto=yes') }}">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="{{ asset('images/products/tapa-boca-de-impulsion.jpg?auto=yes') }}">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="{{ asset('images/products/union-tipo-mandrilar.jpg?auto=yes') }}">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="{{ asset('images/products/union-tipo-storz.jpg?auto=yes') }}">
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img class="w-50" src="{{ asset('images/products/valvula-tipo-teatro.jpg?auto=yes') }}">
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
                    <a class="btn btn-outline-light btn-xl js-scroll-trigger mt-5 mb-5" href="#listado" title="Continuar">Continuar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Products List -->
    <section class="masthead mt-5" id="listado">
        <div class=" div_trans8">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h2 class="text-uppercase text-white font-weight-bold mb-4 mt-4">Lista de Productos</h2>
                    <p class="text-white font-weight-light mb-5"></p>
                    <hr class="divider m-4">
                </div>
                <div class="col-lg-10 ">

                    <div class="row table-responsive-sm text-white">
                        <div class="col-md-12">
                            @if(count($products)>0)
                                <table id="productsTable" class="table table-striped text-white">
                                    <thead>
                                    <tr>
                                        <th class="text-center" width="25%">Producto</th>
                                        <th class="text-center" width="75%">Descripción</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="text-left">{{ $product->name }}</td>
                                            <td class="text-left">{{ $product->description }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            @else
                                <h4>No hay productos cargados</h4>
                            @endif
                        </div>
                    </div>


                    <a class="btn btn-outline-danger btn-xl js-scroll-trigger mb-5" href="#deteccion" title="Subir">Subir</a>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')

@stop

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            if ( $( '[name="anchor"]' ).length ) {
                window.location = "#" + $( '[name="anchor"]' ).val();
            }
        });

        $(document).ready(function() {
            $('#productsTable').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "",
                    "infoEmpty": "",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "lengthMenu":		[[5, 10, 20, 30, 50, 100, -1], [ 5, 10, 20, 30, 50, 100, "Todos"]],
                "iDisplayLength":	20,
                "bJQueryUI":		false,
                "aoColumns":[
                    {"bSortable": true},
                    {"bSortable": true},
                ],

            });
            $("input.form-control.form-control-sm").attr('placeholder', 'Buscar...');
            $("input.form-control.form-control-sm").attr('size', 30);
            $("input.form-control.form-control-sm").focus();
            $("ul.pagination").addClass("pagination-sm");
        } );

    </script>


@stop
