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
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i,900,900i" rel="stylesheet">

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
    
    <div class="mensaje">
        <h1 font-family="Merriweather">Preparate para una paladar experiencia</h1>
        <p>Mas de 100 especialidades con increibles promociones que te dejaran  totalmente impresionado!</p>
    </div>
    
    <div class ="footerPrincipal">
        
    </div>
    
    <div class ="slider0">
        <img  id="uno" class="principal" src="{{ asset('images/food1.jpeg') }}"> 
    </div>
    <div class ="slider1">
        <img id="dos" class="principal" src="{{ asset('images/drinkHero.jpeg') }}"> 
    </div>
    
</div>

<content>
<h1> Prueba 1 </h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>

</content>


<!-- JavaScript -->
@yield('javascript')

</body>
</html>