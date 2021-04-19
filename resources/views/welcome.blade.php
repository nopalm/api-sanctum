<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <!-- <body>
        <div class="navbar navbar-expand-lg navbar-light bg-light">
            @if (Route::has('login'))
            <ul class="navbar-nav mr-auto">
                    @auth
                    <li class="nav-item active">
                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                        </li>
                    @else
                    <li class="nav-item active">
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item active">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                        @endif
                    @endauth
            </ul>
            @endif
        </div> -->

        <!-- React root DOM -->
        <div id="example">
        </div>

    <!-- React JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
