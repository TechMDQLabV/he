@extends('layouts.app')

@section('title', 'Listado de productos')

@section('body-class', 'product-page')

@section('content')
<div id="general" class="header header-filter">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de productos</h2>
            <a href="{{ url('/admin/products/create') }}" class="btn btn-warning btn-round t-black">Nueva Producto</a>
            <div class="team">
                <div class="row">

                    @if(count($products)>0)
                    <table class="table">
                        <thead>
                            <tr class="b-yellow">
                                <th class="col-md-2 text-center">Nombre</th>
                                <th class="col-md-5 text-center">Descripción</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $products)
                            <tr>
                                <td align="left">{{ $products->name }}</td>
                                <td align="left">{{ $products->description }}</td>
                                
                                <td class="td-actions text-right">
                                    <a href="#" rel="tooltip" title="Ver producto"><i class="fa fa-info font24 t-blue"></i></a>&nbsp;&nbsp;
                                    <a href="{{ url('/admin/products/'.$products->id.'/edit') }}" rel="tooltip" title="Editar producto"><i class="fa fa-edit font24 t-yellow"></i></a>&nbsp;&nbsp;
                                    <!-- <a href="{{ url('/admin/products/'.$products->id.'/del') }}" rel="tooltip" title="Eliminar"><i class="fa fa-times font24 t-red"></i></a>&nbsp;&nbsp; -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @else
                        <h4>No hay productos cargados</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
