@extends('layout')
@section('titulo')
    <title>Nuevo Producto</title>
@endsection
@section('contenido')
    <form action="{{route('productos.store')}}" method="post">
        @csrf
        <x-input-label for="cod">Código</x-input-label>
        <x-text-input type="text" name='cod' id='cod' />
        <x-input-label for="nombre">Nombre</x-input-label>
        <x-text-input type="text" name='nombre' id='nombre' />
        <x-input-label for="nombre_corto">Nombre Corto</x-input-label>
        <x-text-input type="text" name="nombre_corto" id='nombre_corto' />
        <x-input-label for="descripcion">Descripción</x-input-label>
        <x-text-input type="text" name="descripcion" id='descripcion' />
        <x-input-label for="pvp">Precio</x-input-label>
        <x-text-input type="text" name="PVP" id='pvp' />
        <x-input-label for="familia">Familia</x-input-label>
        <x-text-input type="text" name="familia" id='familia' />
        <x-primary-button type="submit" value='guardar'>Guardar</x-primary-button>
    </form>
    
@endsection