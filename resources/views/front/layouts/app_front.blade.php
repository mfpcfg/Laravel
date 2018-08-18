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
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="shortcut icon" href="{{ asset('favicon2.png') }}" type="image/x-icon">
    
    <!-- Footer link -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                 <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- <i class="fab fa-grunt"></i> -->
                    <!-- <i class="fas fa-globe"></i> -->
                    <!-- <i class="fas fa-arrow-circle-left"></i> -->
                    <!-- <i class="fas fa-door-closed"></i> -->
                    <!--<i class="fas fa-sync"></i> -->
                    <i class="fas fa-home"> Главная </i>
                 </a>
                 <a class="navbar-brand" href="{{ url('/front') }}">
                    <!-- <i class="fas fa-home"> Главная </i> -->
                    <i class="fas fa-book-open"> Библиотека </i>
                </a>
                <a class="navbar-brand" href="{{ url('/library') }}">
                    <!-- <i class="fas fa-book-open"> Библиотека </i> -->
                    <i class="fas fa-user-alt"> Админка </i>
                </a>
                <a class="navbar-brand" href="/callback">
                    <i class="fab fa-accessible-icon"> Служба поддержки </i>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar 
                      <ul class="navbar-nav mr-auto">
                        <li class="dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Моя библиотека</a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="{{route('book.index')}}">Книги</a></li>
                            <li><a href="{{route('author.index')}}">Авторы</a></li>
                            <li><a href="{{route('genre.index')}}">Жанры</a></li>
                          </ul>
                        </li>

                    </ul>-->


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}"><i class="fas fa-door-open"> Вход </i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}"><i class="fas fa-check-circle"> Регистрация </i></a>
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
                                        Выход <i class="fas fa-door-closed"></i>
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
<hr>
<footer class="bg-dark text-white">
<div class="container">
    <hr>
        <div class="text-center center-block">
            <p class="txt-railway">- © 2018 Copyright: Kozakov Andrii -</p>
            
                <a href="https://www.facebook.com/profile.php?id=100017213376836"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                <a href="https://www.instagram.com/l_kozakov_l/"><i id="social-inst" class="fa fa-instagram fa-3x social"></i></a>
                <a href="https://www.linkedin.com/in/andrii-kozakov-32b33a160/"><i id="social-link" class="fa fa-linkedin-square fa-3x social"></i></a>
                <a href="https://github.com/mfpcfg/Laravel"><i id="social-git" class="fa fa-github fa-3x social"></i></a>
                <a href="mailto:mfpcfg@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
        <hr>
</div>
</footer>
<hr>
</html>
