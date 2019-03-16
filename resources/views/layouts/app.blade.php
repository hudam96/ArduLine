<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="{{asset('css/front-style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Knewave|Monoton|Press+Start+2P|Tangerine|VT323" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Share+Tech+Mono" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{asset('logo.png')}}">
    @yield('body')
</head>
    <body>

    <div class="top"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-style">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" id="navbarNav" href="/">ArduLine</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            </ul>
            <ul class="navbar-nav ml-auto ul-style">
                <!-- Authentication Links -->

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/" data-toggle="tooltip" data-placement="bottom" title="you have to login first ">Cart <i class="fas fa-shopping-cart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/store">Store <i class="fas fa-store"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} <i class="fas fa-user"></i></a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }} <i class="fas fa-sign-in-alt"></i></a>
                        </li>
                    @endif
                @else
                    <li class="nav-item"><a class="nav-link" href="/store">Store <i class="fas fa-store"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="/shopping-cart"> Cart <i class="fas fa-shopping-cart "> <span class="badge">{{\Illuminate\Support\Facades\Session::has('card') ? \Illuminate\Support\Facades\Session::get('card')->totalQty: ''}}</span></i></a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fas fa-user-circle"></i>   {{ Auth::user()->name }}  <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-style" aria-labelledby="navbarDropdown">
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
    </nav>
    <ul class="nav" id="nav">
        <li class="nav-item"> <a class="huda" id="inn" href="https://facebook.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
        <li class="nav-item"><a  id="fa" href="https://facebook.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
        <li class="nav-item"><a id="sn" href="https://facebook.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-snapchat-ghost"></i></a></li>
        <li class="nav-item"><a id="tw" href="https://facebook.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li>

    </ul>

        @yield('content')
    <div class="up">
        <a href="#top" id="up" ><i class="fas fa-chevron-up"></i></a>
    </div>

    <div class="container-fluid footer">

        <h5 class="pt-2">all  copyrights  reserved to ArduLine 2019 <i class="far fa-copyright"></i></h5>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("nav").style.top = "5em";
                document.getElementById("nav").style.zIndex = 100000;
            } else {
                document.getElementById("nav").style.top = "-20em";
            }
        }



        $(window).scroll(function() {

            if ($(this).scrollTop()>400)
            {
                $('.up').fadeIn();
            }
            else
            {
                $('.up').fadeOut();
            }
        });



        @yield('script')
    </script>

    @yield('map')


    </body>
</html>
