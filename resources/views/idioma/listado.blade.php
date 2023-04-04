@extends('layout')
@section('titulo')
    <title>Listar idiomas</title>
@endsection
@section('contenido')
@auth
    <x-nav-link href="{{route('idiomas.create')}}" class="px-4 py-4">Crear Idioma</x-nav-link>
    <table class="w-full text-center">
        <caption>Listado de Idiomas</caption>
        <tr>
            <th>ID</th>
            <th>Idioma</th>

        </tr>
        @foreach ($idiomas as $idioma)
         <tr>
            <td>{{$idioma->id}}</td>
            <td>{{$idioma->idioma}}</td>

            <td>
                <form action="{{route('idiomas.show',$idioma->id)}}" method="get">
                    @csrf
                    <x-primary-button>Mostrar</x-primary-button>
                </form>    
            </td> 
            <td>
                <form action="{{route('idiomas.destroy',$idioma->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <x-primary-button>Borrar</x-primary-button>
                </form>
            </td>
            <td>
                <form action="{{route('idiomas.edit',$idioma->id)}}" method="get">
                    @csrf
                    <x-primary-button>Editar</x-primary-button>
                </form>    
            </td>  
        </tr>   
        @endforeach

    </table>
    <br>
    <div>{{$idiomas->links()}}</div>
    @endauth
    @guest
    <h1 class="text-center">Debes loguearte primero</h1>
    @endguest
@endsection