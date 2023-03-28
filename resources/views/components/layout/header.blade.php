<header class="h-15vh bg-header">
    <div class="flex flex-row mx-10 h-15vh">
        <div class="flex-none"><img src="{{asset("./img/logo.jpg")}}" alt="logo" class="h-15vh"></div>
        <div class="flex-auto m-auto text-5xl text-center">DATOS DE EMPRESA</div>
        <div class="flex-end">
            @auth
                <div class="text-l mt-3">Bienvenido {{auth()->user()->name}}</div>
                <form action="logout" method="post">
                    @csrf
                    <div class="text-xl mt-3 flex justify-end">
                        <button type="submit" value="logout" class="">Logout</button>
                    </div>
                </form>
            @endauth
            @guest
                <form action="login" method="post">
                    @csrf 
                    <div class="flex justify-end">
                        <input type="email" name="email" placeholder="ejemplo@correo.com" class="text-s m-2 w-1/3">
                        <input type="password" name="password" placeholder="password" class="text-s m-2 w-1/4">
                    </div>
                    <div class="text-xl my-1 flex justify-end">
                        <button type="submit" value="login" class="mx-2">Login</button>
                        <a href="{{route('register')}}" class="mx-2">Registrarse</a>
                    </div>
                </form>
            @endguest
        </div>
    </div>
</header>