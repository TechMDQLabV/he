@extends('layouts.app')

@section('body-class', 'product-page')

@section('content')
<div id="general" class="header header-filter">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Registrar nueva categoría</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ url('/admin/products') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre del producto</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    
                </div>

                <textarea class="form-control" placeholder="Descripción del producto" rows="5" name="description">{{ old('description') }}</textarea>

                <button class="btn btn-warning t-black">Registrar producto</button>
                <a href="{{ url('/admin/products') }}" class="btn btn-default t-black">Cancelar</a>
            </form>
        </div>

    </div>
</div>

@endsection
