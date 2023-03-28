<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('titulo')
    @vite(['resources/css/app.css']) 
</head>
<body>
    <x-layout.header />
        
    <nav class="h-10vh bg-nav">
        <x-nav-link href="{{route('empresas.index')}}" class="px-5">EMPRESAS</x-nav-link>
        <x-nav-link href="{{route('productos.index')}}" class="px-5">PRODUCTOS</x-nav-link>
    </nav>
    <main class="h-65vh bg-main">
        @yield('contenido')
    </main>
    <footer class="h-10 bg-footer">
        PIE DE PÁGINA
    </footer>
</body>
</html>