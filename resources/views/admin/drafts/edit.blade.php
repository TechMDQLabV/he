@extends('layouts.app')

@section('body-class', 'product-page')

@section('content')
<div id="general" class="header header-filter">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Editar Proyecto</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ url('/admin/drafts/'.$draft->id.'/edit') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Titulo del Proyecto</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $draft->title) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="control-label">Imagen del Proyecto</label>
                        <input type="file" name="image">
                        @if ($draft->image)
                        <p class="help-block">
                            Subir sólo si desea reemplazar la 
                            <a href="{{ asset('/images/drafts/'.$draft->image) }}" target="_blank">imagen actual</a>
                        </p>
                        @endif
                    </div>                    
                </div>

                <textarea class="form-control" placeholder="Descripción de la categoría" rows="5" name="description">{{ old('description', $draft->description) }}</textarea>

                <button class="btn btn-warning t-black">Guardar cambios</button>
                <a href="{{ url('/admin/drafts') }}" class="btn btn-default">Cancelar</a>
            </form>
        </div>

    </div>

</div>
@endsection
