<!doctype html>

<body 
  style="background-color:#95EEE1;">
</body>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" >
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{url("https://document-export.canva.com/RSmvA/DAFUg8RSmvA/6/thumbnail/0001.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAQYCGKMUHWDTJW6UD%2F20221211%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20221211T090819Z&X-Amz-Expires=75703&X-Amz-Signature=e2dddfa4debf6c45bd8dbea3ecba0c5fbfce4e036e2dc41dba320a932ffb2d26&X-Amz-SignedHeaders=host&response-expires=Mon%2C%2012%20Dec%202022%2006%3A10%3A02%20GMT")}}" height="75" width="75">
                </a>
                <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon" ></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ">
                                    <a class="text-white nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }} </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class=" text-white nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            
                            <li class="nav-item" >
                                <a  class="text-white nav-link"  href="/roles">
                                    Roles
                                </a>
                            </li>

                            <li class="nav-item">
                                <a  class="text-white nav-link" href="/usuarios">
                                    Usuarios
                                </a>
                            </li>

                            <li class="nav-item">
                                <a  class="text-white nav-link" href="/carreras">
                                    Carreras
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  class="text-white nav-link" href="/autores">
                                    Autores
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  class="text-white nav-link" href="/editoriales">
                                    Editoriales
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  class="text-white nav-link" href="/libros">
                                    Libros
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  class="text-white nav-link" href="/prestamos">
                                    Prestamos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link" href="/categorias">
                                    Categorias
                                </a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
