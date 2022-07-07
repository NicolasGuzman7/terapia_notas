<!DOCTYPE html>
<html>
<head>
	
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terapia en Notas</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ env('APP_URL', '') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ env('APP_URL', '') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ env('APP_URL', '') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ env('APP_URL', '') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ env('APP_URL', '') }}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{ env('APP_URL', '') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ env('APP_URL', '') }}/css/style.css" type="text/css">
    @yield('css')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container" >
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="/"><img src="{{ env('APP_URL', '') }}/images/boombox.png" alt="" ></a>
                    </div>
                </div>
                <div class="col-lg-10 ">
                    <div class="header__nav__option" >
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li class=""><a href="{{ env('APP_URL', '') }}/vergaleria">Galeria</a></li>
                                <li><a href="{{ env('APP_URL', '') }}/verartista">Artistas</a></li>
                                <li><a href="{{ env('APP_URL', '') }}/calendario">Calendario</a></li>
                                <li><a href="{{ env('APP_URL', '') }}/contactanos">Contactanos</a></li>
                                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 {{ Auth::user()->nombre }}

                                </a>

                                <div class="nav-item">
                                    <a class="nav-item" href="{{ route('logout') }}"
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
                        </nav>
                        <div class="header__nav__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
        
    </header>





        @yield('content')

    




<footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-spotify"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__option__item">
                            <h5>Sobre Nosotros</h5>
                            <p>Agrupacion Urbana creada en 2018 por jovenes de poblacion los volcanes dedicada a la musica,danza y arte callejero con el fin de alejar a los niños de las drogas</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Quiénes somos</h5>
                            <ul>
                                <li><a href="{{ env('APP_URL', '') }}/sobrenosotros">Equipo</a></li>
                                <li><a href="{{ env('APP_URL', '') }}/sobrenosotros">Carrera</a></li>
                                <li><a href="{{ env('APP_URL', '') }}/contactanos">Contacto</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Nuestros Artistas</h5>
                            <ul>
                                <li><a href="{{ env('APP_URL', '') }}/verartista">Cantantes</a></li>
                                <li><a href="{{ env('APP_URL', '') }}/verartista">Bailarines</a></li>
                                <li><a href="{{ env('APP_URL', '') }}/verartista">Malabaristas</a></li>
                                <li><a href="{{ env('APP_URL', '') }}/verartista">Graffiteros</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </footer>
    <script src="{{ env('APP_URL', '') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ env('APP_URL', '') }}/js/bootstrap.min.js"></script>
    <script src="{{ env('APP_URL', '') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ env('APP_URL', '') }}/js/mixitup.min.js"></script>
    <script src="{{ env('APP_URL', '') }}/js/masonry.pkgd.min.js"></script>
    <script src="{{ env('APP_URL', '') }}/js/jquery.slicknav.js"></script>
    <script src="{{ env('APP_URL', '') }}/js/owl.carousel.min.js"></script>
    <script src="{{ env('APP_URL', '') }}/js/main.js"></script>


    @yield('js')
</body>
</html>