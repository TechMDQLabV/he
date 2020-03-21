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
                    <h5 class="text-white "></h5>
                    <hr class="divider m-4">
                </div>
                <div class="col-lg-6 align-self-baseline">
                    <p class="text-white font-weight-light mb-5">La empresa cuenta con un departamento de ingeniería abocado al relevamiento, diseño, cálculo e implementación de sistemas de detección y/o extinción.</p>
                    <p class="text-white font-weight-light mb-5">El mismo trabaja siguiendo los principios fundamentales de la normativa internacional NFPA y las normas nacionales IRAM para establecer los requisitos mínimos que deben cumplir los sistemas de control de incendios.</p>
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
                    <h5 class="text-white "></h5>
                    <hr class="divider m-4">
                </div>
                <div class="col-lg-6 align-self-baseline">
                    <p class="text-white font-weight-light mb-5">Contamos con un stock de equipamiento para cubrir el reemplazo de partes de todo tipo de instalación contra incendios.</p>
                    <p class="text-white font-weight-light mb-5">Cubrimos todo tipo de necesidades desde detectores de humo, alarmas, bombas, válvulas de todo tipo, mangueras, lanzas, sprinklers, etc., para que el cliente pueda tener funcionando la instalación a la brevedad.</p>
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
                    <h5 class="text-white "></h5>
                    <hr class="divider m-4">
                </div>
                <div class="col-lg-6 align-self-baseline">
                    <p class="text-white font-weight-light mb-5">Cubrimos todos los aspectos en la lucha contra los incendios.</p>
                    <p class="text-white font-weight-light mb-5">Sistemas de detección temprana y alarma.</p>
                    <p class="text-white font-weight-light mb-5">Sistemas de extinción en base a agua, espumas, gases. Sistemas de reserva de agua independiente y bombeo para la alimentación de las líneas de extinción.</p>
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
                    <h5 class="text-white "></h5>
                    <hr class="divider m-4">
                </div>
                <div class="col-lg-6 align-self-baseline">
                    <p class="text-white font-weight-light mb-5">La empresa cuenta con personal capacitado para la realización del mantenimiento de las distintas partes componentes de una instalación de detección y extinción de incendios. Las tareas se realizan de acuerdo a los protocolos para cada tipo de instalación y llevando un registro de rutina para garantizar el funcionamiento del equipamiento en todo momento.</p>
                    <p class="text-white font-weight-light mb-5">El mantenimiento mencionado puede ser preventivo y correctivo de acuerdo a las necesidades del cliente. El primero de acuerdo a una rutina y frecuencias predeterminadas de acuerdo a normas, y el segundo en caso de la detección de una anomalía, realizando la reparación y/o corrección de la misma.</p>
                    <a class="btn btn-outline-danger btn-xl js-scroll-trigger mb-5" href="#dyc" title="Subir">Subir</a>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')

@stop

@section('scripts')

@stop
