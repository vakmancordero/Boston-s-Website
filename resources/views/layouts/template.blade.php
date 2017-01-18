<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- StyleSheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template/bostons.css') }}">
            
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700,800i" rel="stylesheet">

    @yield('stylesheets')

    <script src="{{ asset('library/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('library/angular.min.js') }}"></script>
    <script src="{{ asset('bootstrap-3.3.7/js/bootstrap.js') }}"></script>
    

    <script src="{{ asset('js/template/main.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>

    @yield('javascript-before')

    <title>@yield('title')</title>

</head>
<body style="padding-top: 0px;">


    
    
    

@yield('content')


<div class="slider">
    <ul class="nav nav-pills" id="head-links">
        <li role="presentation" id="linkIzquierda"><a href="#">Home</a></li>
        <li role="presentation"><a href="#">Menu</a></li>
        <li role="presentation"><a href="#">Promociones</a></li>
        <li role="presentation" id="linkDerecha"><a href="#">Locacion</a></li>
    </ul> 
    <img src="{{ asset('images/logo.png') }}" id="head-logo">
    
    <div class="señalamiento">
        
        <p class="señalIzquierda"> < </p>
        
        
        <p class="señalDerecha"> > </p>
        
    </div>
    <div class ="footerPrincipal">
        
    </div>
    
        <div class ="slider0">
            <img class="principal" src="{{ asset('images/food1.jpeg') }}"> 
        </div>
        <div class ="slider1">
            <img class="principal" src="{{ asset('images/drinkHero.jpeg') }}"> 
        </div>
    
</div>


<!-- JavaScript -->
@yield('javascript')

</body>
</html>