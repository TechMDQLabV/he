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
                @foreach($draftsWithImages as $draft)
                    <div class="card col-md-3 m-2">
                        @foreach($draft->images as $image)
                        <a href="{{ $image->url }}" data-toggle="lightbox" data-gallery="projects-lightbox{{ $draft->id }}" data-title="{{ $draft->title }}" data-footer="{{ $draft->description }}" class="">
                            <img class="img-fluid card-img-top {{ ($loop->first) ? "" : "d-none" }}" src="{{ $image->url }}" alt="">
                        </a>
                        @endforeach
                        <div class="card-body">
                            <h5 class="card-title">{{ $draft->title }}</h5>
                            <p class="card-text">{{ $draft->description }}</p>
                        </div>
                    </div>
                @endforeach
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
