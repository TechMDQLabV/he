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
                    @foreach ($drafts as  $draft)
                       
                    <tr>
                        <td align="left">{{ $draft->title }}</td>
                        <td align="left">{{ $draft->description }}</td>
                        <td>
                            <img src={{$draft->featured_image_url}} height="50">
                        </td>
                        <td class="td-actions text-right">
                            <a href="#" rel="tooltip" title="Ver Proyecto"><i class="fa fa-info font24 t-blue"></i></a>&nbsp;&nbsp;
                            <a href="{{ url('/admin/drafts/'.$draft->id.'/edit') }}" rel="tooltip" title="Editar proyecto"><i class="fa fa-edit font24 t-yellow"></i></a>&nbsp;&nbsp;
                            <!-- <a href="{{ url('/admin/drafts/'.$draft->id.'/del') }}" rel="tooltip" title="Eliminar"><i class="fa fa-times font24 t-red"></i></a>&nbsp;&nbsp; -->
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
