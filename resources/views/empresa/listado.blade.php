@extends('layout')
@section('titulo')
    <title>Listar Empresas</title>
@endsection
@section('contenido')
    @auth
        <x-nav-link href="{{route('empresas.create')}}" class="px-4 py-4">Crear Empresa</x-nav-link>
        <mitabla filas_serializadas='@json($filas)' campos_serializados='@json($campos)' tabla='{{$tabla}}'> 
    @endauth
    @guest
        <h1 class="text-center">Debes loguearte primero</h1>
    @endguest
@endsection