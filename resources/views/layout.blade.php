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
    <header class="h-15vh bg-header text-center text-2xl">
        <div class="grid grid-cols-6 gap-4">
            <div class=""><img src="{{asset("./img/logo.jpg")}}" alt="logo" class="h-15vh"></div>
            <div class="col-span-3  align-bottom">DATOS DE EMPRESA</div>
            <div class="col-span-2">Login</div>
        </div>
    </header>
    <nav class="h-10vh bg-nav">
        <a href="about">Acerca de</a>
        <a href="contacta">Contacta con nosotros</a>
        <a href="noticias">Noticias</a>
        @yield('menu')
    </nav>
    <main class="h-65vh bg-main">
        @yield('contenido')
    </main>
    <footer class="h-10 bg-footer">
        PIE DE PÁGINA
    </footer>
</body>
</html>