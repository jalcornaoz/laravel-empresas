@extends('layout')
@section('contenido')
    <form action="{{route('empresas.update',$empresa->id)}}" method="post">
        @method('PUT')
        @csrf
        <x-input-label for="nombre">Nombre</x-input-label>
        <x-text-input type="text" name='nombre' id='nombre' value='{{$empresa->nombre}}' />
        <x-input-label for="direccion">Dirección</x-input-label>
        <x-text-input type="text" name="direccion" id='direccion' value='{{$empresa->direccion}}' />
        <br />
        <x-primary-button>Guardar</x-primary-button>
    </form>
    
@endsection