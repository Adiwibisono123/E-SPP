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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <li>
                    <a class="navbar-brand" href="{{ url('/petugas') }}">
                        Petugas
                    </a>
                </li>
                <li>
                    <a class="navbar-brand" href="{{ url('/siswa') }}">
                        Siswa
                    </a>
                </li>
                <li>
                    <a class="navbar-brand" href="{{ url('/spp') }}">
                        Data Spp
                    </a>
                </li>
                {{-- <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Kelas 
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="{{ url('/xakl') }}">X AKL</a>
                      <a class="dropdown-item" href="#">X OTKP</a>
                      <a class="dropdown-item" href="#">X RPL</a>
                      <a class="dropdown-item" href="#">X BOGA</a>
                      <a class="dropdown-item" href="#">XI AKL</a>
                      <a class="dropdown-item" href="#">XI OTKP 1</a>
                      <a class="dropdown-item" href="#">XI OTKP 2</a>
                      <a class="dropdown-item" href="#">XI RPL</a>
                      <a class="dropdown-item" href="#">XI BOGA</a>
                      <a class="dropdown-item" href="#">XII AKL</a>
                      <a class="dropdown-item" href="#">XII OTKP 1</a>
                      <a class="dropdown-item" href="#">XII OTKP 2</a>
                      <a class="dropdown-item" href="#">XII RPL</a>
                      <a class="dropdown-item" href="#">XII BOGA</a>
                    </div>
                  </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
        @include('sweet::alert')
    </div>
</body>
</html>
