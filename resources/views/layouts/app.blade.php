<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MangandaKita!') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-lg navbarcolor sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <img src="/assets/headerlogo.png" class="zoom">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if(Auth::check())
                        @if(Auth::user()->usertype == 1)
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item active">
                                    <a class="nav-link zoom" href="/adminorders">View Orders</a>
                                </li>
                            </ul>
                        @else
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item active">
                                    <a class="nav-link zoom" href="/menu">Menu</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link zoom" href="/placeorder">Place Order</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link zoom" href="/contact">Contact</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link zoom" href="/techstack">Technology Stack</a>
                                </li>
                            </ul>
                        @endif
                    @else
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item active">
                                <a class="nav-link zoom" href="/menu">Menu</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link zoom" href="/placeorder">Place Order</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link zoom" href="/contact">Contact</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link zoom" href="/techstack">Technology Stack</a>
                            </li>
                        </ul>
                    @endif
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
                                    <a class="nav-link zoom" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link zoom dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{Auth::user()->firstname}} {{Auth::user()->lastname}}
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="account/{{Auth::user()->username}}/edit">
                                        My Account
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

        <main>
            @include('pages.messages')
            @yield('content')
        </main>
    </div>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->

    <!-- vuejs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
</body>
</html>
