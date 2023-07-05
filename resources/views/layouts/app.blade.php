<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</head>

<body style="background-color: #FFE4A7;">
    <div id="app">
        <nav class="navbar navbar-expand-md  shadow-lg" style="background-color: #FF90BB; ">
            <div class="container ">
                <img src="../resources/img/logo_makeup.jpeg" alt="" class="rounded-circle me-3 "
                    style="width: 40px; height: 40;">
                <a class="navbar-brand text-light" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <button class="btn btn-secondary btn-sm rounded-3 me-3">
                                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </button>
                            @endif

                            @if (Route::has('register'))
                                <button class="btn btn-secondary btn-sm rounded-3">
                                    <a class="nav-link text-light"
                                        href="{{ route('register') }}">{{ __('Register') }}</a></button>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-light dropdown-toggle " href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div style="background-color: #FFFAD7;" class="dropdown-menu dropdown-menu-end "
                                    staria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/pelanggan') }}">
                                        {{ __('Pelanggan') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/golongan') }}">
                                        {{ __('Golongan') }}
                                    </a>
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
        <main class="container py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
