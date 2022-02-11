<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mangan Da Kita</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .zoom {
        transition: transform .2s; /* Animation */
        margin: 0 auto;
        }

        .zoom:hover {
        transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>


</head>
<!--INDEX PAGE/LANDING PAGE-->
<body style="background-color:#FDFBEE;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-lg sticky-top" style="background-color:#FCFAEB;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <div>
                    <img src="assets/headerlogo.png" class="zoom"></img>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link zoom" href="menu">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link zoom" href="placeorder">Place Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link zoom" href="contact">Contact Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link zoom" href="techstack">Technology Stack</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link zoom" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link zoom" href="signup">Sign Up</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hello, {{ Auth::user()->username }} !
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="account">
                                        My account
                                    </a>
                                    <hr>
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
    </div>
    <img src ="assets/banner.jpg" style="width:100%;"></img>
    <div class="row justify-content-center">    
        <div class="col-md-3" style="text-align:center;">
            <br><br><br><br>
            <div class="card bg-transparent" style="border:0px;">
                <div class="card-body">
                <img src="assets/headerlogo.png" width="300px;" height="60px;"></img>
                    <hr>
                    <p class="card-text">Mangan Da Kita is one of the booming food businesses in the city. Located in the heart of the city, 
                    this al fresco food hub specializes on authentic Filipino cuisine. </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>