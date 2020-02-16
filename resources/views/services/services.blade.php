@extends('layouts.app')

@section('title', 'HE Hidro Extinción')

@section('body-class', 'landing-page')

@section('styles')

@stop

@section('content')
    <!-- Diseño y Cálculo -->
    <section class="" id="dyc">
        <div class="div_trans8">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="text-uppercase text-white font-weight-bold mb-4 mt-4">Diseño y Cálculo</h2>
                    <h5 class="text-white ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                    <hr class="divider m-4">
                </div>
                <div class="col-lg-6 align-self-baseline">
                    <p class="text-white font-weight-light mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?</p>
                    <p class="text-white font-weight-light mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?</p>
                    <a class="btn btn-outline-danger btn-xl js-scroll-trigger mb-5" href="#provision" title="Continuar">Continuar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Provisión de Equipamiento -->
    <section class="" id="provision">
        <div class=" h-100 div_trans8">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h2 class="text-uppercase text-white font-weight-bold mb-4 mt-4">Provisión de Equipamiento</h2>
                    <h5 class="text-white ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                    <hr class="divider m-4">
                </div>
                <div class="col-lg-6 align-self-baseline">
                    <p class="text-white font-weight-light mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?</p>
                    <p class="text-white font-weight-light mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?</p>
                    <a class="btn btn-outline-danger btn-xl js-scroll-trigger mb-5" href="#instalaciones" title="Continuar">Continuar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Instalaciones -->
    <section class="" id="instalaciones">
        <div class=" h-100 div_trans8">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h2 class="text-uppercase text-white font-weight-bold mb-4 mt-4">Instalaciones</h2>
                    <h5 class="text-white ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                    <hr class="divider m-4">
                </div>
                <div class="col-lg-6 align-self-baseline">
                    <p class="text-white font-weight-light mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?</p>
                    <p class="text-white font-weight-light mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?</p>
                    <a class="btn btn-outline-danger btn-xl js-scroll-trigger mb-5" href="#mantenimiento" title="Continuar">Continuar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mantenimiento -->
    <section class="" id="mantenimiento">
        <div class=" h-100 div_trans8">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h2 class="text-uppercase text-white font-weight-bold mb-4 mt-4">Mantenimiento</h2>
                    <h5 class="text-white ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                    <hr class="divider m-4">
                </div>
                <div class="col-lg-6 align-self-baseline">
                    <p class="text-white font-weight-light mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?</p>
                    <p class="text-white font-weight-light mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate. Voluptatum ducimus voluptates voluptas?</p>
                    <a class="btn btn-outline-danger btn-xl js-scroll-trigger mb-5" href="#dyc" title="Subir">Subir</a>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')

@stop

@section('scripts')

@stop
