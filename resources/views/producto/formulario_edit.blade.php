@extends('layout')
@section('contenido')
    <form action="{{route('productos.update',$producto->cod)}}" method="post">
        @method('PUT')
        @csrf
        <x-input-label for="cod">Código</x-input-label>
        <x-text-input type="text" name='cod' id='cod' value='{{$producto->cod}}' />
        <x-input-label for="nombre">Nombre</x-input-label>
        <x-text-input type="text" name='nombre' id='nombre' value='{{$producto->nombre}}' />
        <x-input-label for="nombre_corto">Nombre Corto</x-input-label>
        <x-text-input type="text" name="nombre_corto" id='nombre_corto' value='{{$producto->nombre_corto}}' />
        <x-input-label for="descripcion">Descripción</x-input-label>
        <x-text-input type="text" name="descripcion" id='descripcion' value='{{$producto->descripcion}}' />
        <x-input-label for="pvp">Precio</x-input-label>
        <x-text-input type="text" name="PVP" id='pvp' value='{{$producto->PVP}}' />
        <x-input-label for="familia">Familia</x-input-label>
        <x-text-input type="text" name="familia" id='familia' value='{{$producto->familia}}' />
        <br />
        <x-primary-button>Guardar</x-primary-button>
    </form>
    
@endsection