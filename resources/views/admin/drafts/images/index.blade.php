@extends('layouts.app')

@section('title', 'Listado de Proyectos')

@section('body-class', 'proyects-page')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')

    <header class="">
        <div class="text-center container div_trans8 corner4 mb-4 p-4">
            <h2 class="text-white mb-5">Imágenes del producto "{{ $draft->title }}"</h2>

            <form method="post" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input class="text-white" type="file" name="photo" required>
                <button type="submit" class="btn btn-outline-danger btn-round">Subir nueva imagen</button>
                <a href="{{ url('/admin/drafts') }}" class="btn btn-outline-danger btn-round">Volver al listado de proyectos</a>
            </form>

            <hr>

            <div class="row">
                @foreach ($images as $image)
                        <div class="card col-lg-4 mb-2" >
                            <img class="card-img-top mt-2" src="{{ $image->url }}">
                            <div class="card-body">
                                <a href="#modalDeleteDraftImage{{$image->id}}" class="btn btn-outline-danger btn-sm btn-round m-2" type="button" title="Eliminar imágen de {{ $draft->title }}" data-toggle="modal" data-target="#modalDeleteDraftImage{{$image->id}}">Eliminar Imágen</a>
                            </div>
                        </div>

                        <!-- Modal Delete Proyect -->
                        <div class="modal fade text-center" id="modalDeleteDraftImage{{$image->id}}" tabindex="-1" role="dialog" aria-labelledby="modalDeleteDraftImage{{$image->id}}Title" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center bg-danger">
                                        <h5 class="modal-title text-white" id="modalDeleteDraftImage{{$image->id}}Title">Desea Eliminar ésta imágen del Proyecto {{ $draft->title }}?</h5>
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img class="" src="{{ $image->url }}" width="200">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <form method="post" action="{{ url('/admin/drafts/images') }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input type="hidden" name="image_id" value="{{ $image->id }}">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                                            <button class="btn btn-outline-danger" type="submit" title="Eliminar {{ $draft->title }}"><i class="fa fa-times"></i> Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Delete Proyect -->
                @endforeach
            </div>
    </header>
    <p>&nbsp;</p>

    @include('includes.footer')
@endsection
