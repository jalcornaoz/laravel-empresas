@extends('layout')
@section('contenido')
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

@endsection