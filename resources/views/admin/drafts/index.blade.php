@extends('layouts.app')

@section('title', 'Listado de categorías')

@section('body-class', 'product-page')

@section('content')
<div id="general" class="header header-filter">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de Proyectos</h2>
            <table class="table">
                <thead>
                    <tr class="b-yellow">
                        <th class="col-md-2 text-center">Nombre</th>
                        <th class="col-md-5 text-center">Descripción</th>
                        <th class="text-center">Imagen</th>
                        <th class="text-right">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($drafts as $key => $category)
                    <tr>
                        <td align="left">{{ $category->title }}</td>
                        <td align="left">{{ $category->description }}</td>
                        <td>
                            <img src="{{ $category->image }}" height="50">
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
