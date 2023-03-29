@extends('layout')
@section('titulo')
    <title>Listar Empresas</title>
@endsection
@section('contenido')
    <x-nav-link href="{{route('empresas.create')}}" class="px-4 py-4">Crear Empresa</x-nav-link>
    <table class="w-full text-center">
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
            <td>
                <form action="{{route('empresas.show',$empresa->id)}}" method="get">
                    @csrf
                    <x-primary-button>Mostrar</x-primary-button>
                </form>    
            </td> 
            <td>
                <form action="{{route('empresas.destroy',$empresa->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <x-primary-button>Borrar</x-primary-button>
                </form>
            </td>
            <td>
                <form action="{{route('empresas.edit',$empresa->id)}}" method="get">
                    @csrf
                    <x-primary-button>Editar</x-primary-button>
                </form>    
            </td>  
        </tr>   
        @endforeach

    </table>
    <br>
    <div>{{$empresas->links()}}</div>

@endsection