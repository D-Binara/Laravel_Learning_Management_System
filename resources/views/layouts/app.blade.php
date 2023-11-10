<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LMS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<ul class="navbar-nav ">
</ul>
<ul class="navbar-nav ms-auto">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-4 py-1 sm:block">
            @auth
                <li class="nav-item  d-md-inline-block">
                    <a href="{{ url('/home') }}" class="text-gray-700 nav-link ">Home</a>
                </li>
            @else
                <li class="nav-item  d-md-inline-block">
                    <a href="{{ route('login') }}" class="ml-4  text-gray-700  nav-link ">Login</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item  d-md-inline-block">
                        <a href="{{ route('register') }}"
                           class="ml-4 text-gray-700 nav-link">Register</a>
                    </li>
                @endif
            @endif
        </div>
    @endif
</ul>
</nav>

<main class="py-4">
    @yield('content')
</main>


@yield('content_Home')
</body>
</html>
