@extends('layout')
@section('contenido')
    <table class="w-full">
        <caption>Listado de empresas</caption>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
        </tr>
        @foreach ($empresas as $empresa)
         <tr>
            <td>{{$empresa->id}}</td>
            <td>{{$empresa->nombre}}</td>
            <td>{{$empresa->direccion}}</td>   
        </tr>   
        @endforeach

    </table>
    <br>
    <div>{{$empresas->links()}}</div>

@endsection