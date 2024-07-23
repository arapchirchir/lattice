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
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/lattice.css'])
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        .dropdown:hover .dropdown-menu-end {
            right: 0;
            left: auto;
        }
    </style>
    @livewireStyles
</head>

<body>
    <div id="app">
        @auth
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
                <div class="container">
                    <a class="navbar-brand position-relative" href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" height="80"
                            class="position-absolute bg-white" style="margin-top: -20px;">
                    </a>
                    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @auth
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.blogs') }}" class="nav-link">Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.programs') }}" class="nav-link">Projects</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end rounded-1" aria-labelledby="navbarDropdown">
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
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        @endauth

        @auth
            <main class="py-4">
            @else
                <main class="py-0">
                @endauth

                @yield('content')
            </main>
    </div>
    @livewireScripts
</body>

</html>
