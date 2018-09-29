<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LaraFood') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand text-danger" href="{{ url('/') }}">
                    {{ config('app.name', 'LaraFood') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Admin
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                            <li @if (isset($ingredients))
                                class="nav-item active"
                            @endif ><a class="nav-link" href="/admin/ingredientes">Ingredientes</a></li>
                            <li @if (isset($countries))
                                class="nav-item active"
                            @endif ><a class="nav-link" href="/admin/paises">Países</a></li>
                            <li @if (isset($provinces))
                                class="nav-item active"
                            @endif ><a class="nav-link" href="/admin/provincias">Provincias</a></li>
                            <li @if (isset($cities))
                                class="nav-item active"
                            @endif ><a class="nav-link" href="/admin/ciudades">Ciudades</a></li>
                            <li @if (isset($stores))
                                class="nav-item active"
                            @endif ><a class="nav-link" href="/admin/tiendas">Tiendas</a></li>
                            <li @if (isset($clients))
                                class="nav-item active"
                            @endif ><a class="nav-link" href="/admin/clientes">Clientes</a></li>
                            <li><a class="nav-link" href="{{route('productype-show')}}">Tipos de producto</a></li>
                            <li><a class="nav-link" href="{{route('product-show')}}">Productos</a></li>

                        </div>
                      </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li><a class="nav-link" target="_blank" href="https://trello.com/b/sz6cvOia/larafood">Trello</a></li>
                      <li><a class="nav-link" target="_blank" href="https://github.com/soymanucho/larafood">GitHub/larafood</a></li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deslogueate') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
