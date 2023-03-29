@extends('layout')

@section('titulo')
    <title>Principal</title>
@endsection


@section('contenido')
    @auth
    <h1 class="text-center">Selecciona EMPRESAS o PRODUCTOS</h1>
    @endauth
    @guest
    <h1 class="text-center">Debes loguearte primero</h1>
    @endguest
@endsection
