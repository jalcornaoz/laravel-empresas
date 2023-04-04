@extends('layout')
@section('titulo')
    <title>Listar Alumnos</title>
@endsection
@section('contenido')
@auth
    <x-nav-link href="{{route('alumnos.create')}}" class="px-4 py-4">Crear Alumno</x-nav-link>
    <table class="w-full text-center">
        <caption>Listado de Alumnos</caption>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Email</th>
        </tr>
        @foreach ($alumnos as $alumno)
         <tr>
            <td>{{$alumno->id}}</td>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->telefono}}</td>
            <td>{{$alumno->email}}</td>
            <td>
                <form action="{{route('alumnos.show',$alumno->id)}}" method="get">
                    @csrf
                    <x-primary-button>Mostrar</x-primary-button>
                </form>    
            </td> 
            <td>
                <form action="{{route('alumnos.destroy',$alumno->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <x-primary-button>Borrar</x-primary-button>
                </form>
            </td>
            <td>
                <form action="{{route('alumnos.edit',$alumno->id)}}" method="get">
                    @csrf
                    <x-primary-button>Editar</x-primary-button>
                </form>    
            </td>  
        </tr>   
        @endforeach

    </table>
    <br>
    <div>{{$alumnos->links()}}</div>
    @endauth
    @guest
    <h1 class="text-center">Debes loguearte primero</h1>
    @endguest
@endsection