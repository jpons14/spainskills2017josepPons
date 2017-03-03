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

    <link rel="stylesheet" href="/css/font-awesome.min.css"/>
</head>
<body>

<!--  <div class="navbar-nav navegation navbar-collapse">
<nav class="">
    <ul class="navbar-nav navbar-collapse">
        <li class="nav"><a class="navbar-link" href="/">Home </a></li>
        <li class="nav"><a class="navbar-link" href="/contact">&nbsp;Contacto  </a></li>
        <li class="nav"><a class="navbar-link" href="/experiencies"> &nbsp;Historias</a></li>
    </ul>
</nav>
</div>
-->
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
                <img class="logo" src="/img/logo.png" alt="El logo de la página">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            @if(Auth::guest())
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            @endif
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ route('experiences.index') }} ">Experiencias</a></li>
                <li><a href="{{ route('experiences.index') }}">Usuarios</a></li>
                <li><a href=" {{ route('experiences.index') }}">Categorias</a></li>
            </ul>
        </div>
    </div>
</nav>
{{-- Cuando las vistas hereden de la vista actual par poner el contendiro van a tener que hacer un @extens('content') --}}
@yield('content')

</body>
</html>