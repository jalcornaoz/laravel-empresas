@extends('layout')
@section('contenido')
    <x-nav-link href="{{route('productos.create')}}" class="px-4 py-4">Crear Producto</x-nav-link>
    <table class="w-full text-center">
        <caption>Listado de productos</caption>
        <tr>
            <th>Nombre</th>
            <th>Nombre Corto</th>
            <th>P.V.P.</th>
            <th>Familia</th>
        </tr>
        @foreach ($productos as $producto)
         <tr>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->nombre_corto}}</td>
            <td>{{$producto->PVP}}</td>
            <td>{{$producto->familia}}</td>
            <td>
                <form action="{{route('productos.destroy',$producto->cod)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <x-primary-button>Borrar</x-primary-button>
                </form>
            </td>
            <td>
                <form action="{{route('productos.edit',$producto->cod)}}" method="get">
                    @csrf
                    <x-primary-button>Editar</x-primary-button>
                </form>
                
            </td>
        </tr>   
        @endforeach

    </table>
    <br>
    <div>{{$productos->links()}}</div>

@endsection