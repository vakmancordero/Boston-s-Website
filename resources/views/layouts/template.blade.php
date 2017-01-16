<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- StyleSheet -->
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-3.3.7/css/bootstrap.min.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/bostons.css') }}">

    @yield('stylesheets')

    <script src="{{ asset('library/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('library/angular.min.js') }}"></script>
    <script src="{{ asset('bootstrap-3.3.7/js/bootstrap.js') }}"></script>

    <script src="{{ asset('js/template/main.js') }}"></script>

    @yield('javascript-before')

    <title>@yield('title')</title>

</head>
<body>

@yield('content')

<header class="page-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="navbar-toggle" id="btn-nav" type="button" data-toggle="collapse" data-backdrop="static" data-keyboard="false" data-target="#page-nav-items">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html">
                                <img alt="" class="img-responsive" src="images/navbar/logo-bostons-2.png" width="130">
                            </a>
                        </div>

                        <div class="collapse navbar-collapse" id="page-nav-items">
                            <ul class="nav navbar-nav navbar-right nav-main">
                                <li class=""><a href="menu.html">Men&uacute;</a></li>
                                <li class=""><a href="bostons-fan.html">Boston&prime;s Fan</a></li>
                                <li class=""><a href="ubicaciones.html">Ubicaciones</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- JavaScript -->
@yield('javascript')

</body>
</html>