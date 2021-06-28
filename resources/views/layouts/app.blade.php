<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Favicon -->
	<link rel="shortcut icon" href="https://blogzine.webestica.com/assets/images/favicon.ico">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div style="width: 100%; text-align:center" class="d-lg-none">
                    <a class="navbar-brand" href="{{ url('/') }}" style="widht:20%">
                        <img src="{{ url('img/Logo6.jpg') }}" width="300px" height="80px" alt="Logo principal">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <form class="d-flex" action="{{url('/buscar')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input class="form-control me-2" type="search" id="search" name="search" placeholder="Ingrese su busqueda" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Buscar</button>
                    </form>
                </ul>
                <a class="navbar-brand d-none d-lg-block" href="{{ url('/') }}" style="widht:20%">
                    <img src="{{ url('img/Logo6.jpg') }}" width="300px" height="80px" alt="Logo principal">
                </a>
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('user.profile',Auth::user()) }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('user').submit();">
                                        {{ __('Profile') }}
                                    </a>

                                    <form id="user" action="{{ route('user.profile', Auth::user()) }}" method="get" class="d-none">

                                        @csrf
                                    </form>

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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">{{ __('Principal') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/foros/') }}">{{ __('Foros') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/guias/') }}">{{ __('Guias') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/noticias/') }}">{{ __('Noticias') }}</a>
                        </li>
                        @auth
                            
                        
                        @if (auth()->user()->Rol == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/administrador/') }}">{{ __('Administrador') }}</a>
                            </li>
                        @endif

                        @endauth
                </ul>
              </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div style="width: 100%; text-align:center" class="d-lg-none">
                    <a class="navbar-brand" href="{{ url('/') }}" style="widht:20%">
                        <img src="{{ url('img/Logo6.jpg') }}" width="300px" height="80px" alt="Logo principal">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand d-none d-lg-block" href="{{ url('/') }}" style="widht:20%">
                    <img src="{{ url('img/Logo6.jpg') }}" width="300px" height="80px" alt="Logo principal">
                </a>
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <h5 class="nav">{{ __('Diseño y Desarrollo de Software') }}</h5>
                    </li>
                </ul>
              </div>
            </div>
        </nav>
    </div>
</body>
</html>
