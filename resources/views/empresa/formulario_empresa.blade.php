@extends('layout')
@section('titulo')
    <title>Nueva Empresa</title>
@endsection
@section('contenido')
    @auth
    <form action="{{route('empresas.store')}}" method="post">
        @csrf
        <x-input-label for="nombre">Nombre</x-input-label>
        <x-text-input type="text" name='nombre' id='nombre' />
        <x-input-label for="direccion">Dirección</x-input-label>
        <x-text-input type="text" name='direccion' id='direccion' />
        <x-primary-button type="submit" value='guardar'>Guardar</x-primary-button>
    </form>
    @endauth
    @guest
    <h1 class="text-center">Debes loguearte primero</h1>
    @endguest
@endsection