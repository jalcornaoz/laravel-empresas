@extends('layout')
@section('titulo')
    <title>Mostrar Empresa</title>
@endsection
@section('contenido')
@auth
    <table>
        <caption>Empresa</caption>
        <tr>
            <th>Id</th>
            <td>{{$empresa->id}}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{$empresa->nombre}}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>{{$empresa->direccion}}</td>
        </tr>
    </table>
    <div>
        <a href="{{route("empresas.index")}}">Volver</a>
    </div>
 
    @endauth
    @guest
    <h1 class="text-center">Debes loguearte primero</h1>
    @endguest
@endsection