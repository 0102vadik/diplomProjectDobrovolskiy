<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- CSS -->
    @yield('head_links')

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand">
                <img src="https://eu.bru.by/assets_config/BRU/img/logo-big.png" alt="app-logo" width="30em">
                {{--{{ config('app.name', 'Laravel') }}--}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                @guest
                @else
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="" class="nav-link">{{ __('Список вакансий') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">{{ __('Список анкет') }}</a>
                        </li>
                    </ul>
                @endguest

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Логин') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                            </li>
                        @endif
                    @else

                        <li class="nav-item">
                            <a href="" class="nav-link create-link">{{ __('Cоздать вакансию') }}</a>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link create-link">{{ __('Cоздать анкету') }}</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <div class="dropdown-item-container">

                                    <a href="#" class="dropdown-item">
                                        <img src="{{ asset('img/interface-icons/fi-rr-user.png') }}" alt="user-icon" width="15px"
                                             height="15px">
                                        {{ __('Личный кабинет') }}
                                    </a>
                                </div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <img src="{{ asset('img/interface-icons/fi-rr-sign-out.png') }}" alt="logout-icon" width="15px"
                                         height="15px">
                                    {{ __('Выйти') }}
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

    {{--<main class="py-4">--}}
    @yield('content')
    {{--</main>--}}
</div>
</body>
</html>
