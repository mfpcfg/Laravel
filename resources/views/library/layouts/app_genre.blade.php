<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Fonts Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <link rel="shortcut icon" href="data:image/png;base64,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" type="image/x-icon">
     
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
            <div class="container">
               <a class="navbar-brand" href="{{ url('/front') }}">
                    <i class="fas fa-book-open"> Библиотека </i>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                                        {{ __('Logout') }}
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
