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
    <form action="{{route('empresas.index')}}" method="get">
        @csrf
        <x-primary-button>Volver</x-primary-button>
    </form>    
    @endauth
    @guest
    <h1 class="text-center">Debes loguearte primero</h1>
    @endguest
@endsection