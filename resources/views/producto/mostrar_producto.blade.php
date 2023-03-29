@extends('layout')
@section('titulo')
    <title>Mostrar Producto</title>
@endsection
@section('contenido')
    <table>
        <caption>Producto</caption>
        <tr>
            <th>Código</th>
            <td>{{$producto->cod}}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{$producto->nombre}}</td>
        </tr>
        <tr>
            <th>Nombre Corto</th>
            <td>{{$producto->nombre_corto}}</td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td>{{$producto->descripcion}}</td>
        </tr>
        <tr>
            <th>Precio</th>
            <td>{{$producto->PVP}}</td>
        </tr>
        <tr>
            <th>Familia</th>
            <td>{{$producto->familia}}</td>
        </tr>
    </table>
    <form action="{{route('productos.index')}}" method="get">
        @csrf
        <x-primary-button>Volver</x-primary-button>
    </form>
    
@endsection