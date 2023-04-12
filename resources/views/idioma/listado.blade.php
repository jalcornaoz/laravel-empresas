@extends('layout')
@section('titulo')
    <title>Listar Idiomas</title>
@endsection
@section('contenido')
    @auth
        <x-nav-link href="{{route('idiomas.create')}}" class="px-4 py-4">Crear Idioma</x-nav-link>
        <mitabla filas_serializadas='@json($filas)' campos_serializados='@json($campos)' tabla='{{$tabla}}'> 
    @endauth
    @guest
        <h1 class="text-center">Debes loguearte primero</h1>
    @endguest
@endsection