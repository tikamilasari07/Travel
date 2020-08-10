<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('assetuser/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('assetuser/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('assetuser/css/bootstrap.css') }}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{ asset('assetuser/css/superfish.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assetuser/css/magnific-popup.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('assetuser/css/bootstrap-datepicker.min.css') }}">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{ asset('assetuser/css/cs-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assetuser/css/cs-skin-border.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assetuser/css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{asset('assetuser/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    @section('header')
    <header id="fh5co-header-section" class="sticky-banner">
        <div class="container">
            <div class="nav-header">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                <h1 id="fh5co-logo"><a href="index.html"><i class=""></i>UT TRAVEL</a></h1>
                <!-- START #fh5co-menu-wrap -->
                <nav id="fh5co-menu-wrap" role="navigation">
                    <ul class="sf-menu" id="fh5co-primary-menu">
                        <li class="active"><a href="{{ url('home')}}">Dashboard</a></li>
                        <li>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    @show
    
    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assetuser/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('assetuser/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assetuser/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('assetuser/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assetuser/js/sticky.js') }}"></script>

    <!-- Stellar -->
    <script src="{{ asset('assetuser/js/jquery.stellar.min.js') }}"></script>
    <!-- Superfish -->
    <script src="{{ asset('assetuser/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('assetuser/js/superfish.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assetuser/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assetuser/js/magnific-popup-options.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('assetuser/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- CS Select -->
    <script src="{{ asset('assetuser/js/classie.js') }}"></script>
    <script src="{{ asset('assetuser/js/selectFx.js') }}"></script>
    
    <!-- Main JS -->
    <script src="{{ asset('assetuser/js/main.js') }}"></script>

    @section('footer')
  <footer>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="fh5co-social-icons">
                        <a href="#"><i class="icon-twitter2"></i></a>
                        <a href="#"><i class="icon-facebook2"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                        <a href="#"><i class="icon-dribbble2"></i></a>
                        <a href="#"><i class="icon-youtube"></i></a>
                    </p>
                    <p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
                </div>
</footer>
@show
</body>
</html>
