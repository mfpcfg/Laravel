<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Моя библиотека</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Fonts Awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

        <link rel="shortcut icon" href="{{ asset('favicon2.png') }}" type="image/x-icon">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url(images/51.jpg);
                background-color: black;
                color: white;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"><i class="fas fa-door-open"> Вход </i></a>
                        <a href="{{ route('register') }}"><i class="fas fa-registered"> Регистрация </i></a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Моя библиотека
                </div>

                <div class="links">
                    <a href="/library"><i class="fas fa-user-alt"></i> Админ часть </a>
                    <a href="/front"><i class="fas fa-book"></i> Фронт часть </a>
                </div>
            </div>
        </div>
    </body>
</html>
