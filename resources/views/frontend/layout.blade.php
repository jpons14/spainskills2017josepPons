<!doctype html>
<html lang="es">
<head>
    <title>Mis viajes, home</title>
    <!-- jquery -->
    <script src="/js/jquery-3.1.1.min.js"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <script src="/js/bootstrap.js"></script>

    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <script src="/js/script.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{--MisViajes--}}
                <img class="logo" src="/img/logo.png" alt="El logo de la página">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            @if(Auth::guest())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            @endif
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ route('frontend.index') }} ">Home</a></li>
                <li><a href="{{ route('frontend.contact') }}">Contacto</a></li>
                <li><a href=" {{ route('frontend.experiences') }}">Experiencias</a></li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')

<div class="col-md-12">
    <footer class="footer">
        <ul class="ml10 nav navbar-nav navbar-fixed-bottom">
            <li><a href="{{ route('frontend.index') }}">Home</a></li>
            <li><a href="{{ route('frontend.contact') }}">Contacto</a></li>
            <li><a href="{{ route('frontend.experiences') }}">Experciencias</a></li>
            <li><a href="#">&copy; To Josep Pons Pons Spainskills2017</a></li>
        </ul>
    </footer>
</div>
</body>
</html>