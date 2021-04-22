<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Baida Engineering - Hydraulique</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('extra-meta')
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('main/images/fav.png')}}">
        <!-- bootstrap v3.3.7 css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/css/font-awesome.min.css')}}">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/fonts/flaticon.css') }}">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/fonts/linea-fonts.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/css/animate.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/css/owl.carousel.css')}}">
		 <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/css/slick.css')}}">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/inc/custom-slider/css/nivo-slider.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ url('main/inc/custom-slider/css/preview.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/css/magnific-popup.css')}}">
        <!-- timeline css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/css/timeline.css') }}">
		<!-- rsmenu main css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/css/rsmenu-main.css')}}">
		<!-- rsmenu transitions css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/css/rsmenu-transitions.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- switch color presets css -->
        <link id="switch_style" href="#" rel="stylesheet" type="text/css">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/css/responsive.css')}}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        @yield('stylesheets')
    </head>
    <body class="home1">
        <!--Preloader area start here-->
        @include('main.partials.loader')
        <!--End preloader here -->  

        @yield('content')
        
        <!-- Footer Start -->
        @include('main.partials.footer')
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>

        <!-- modernizr js -->
        <script src="{{ url('main/js/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery latest version -->
        <script src="{{ url('main/js/jquery.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{ url('main/js/bootstrap.min.js')}}"></script>
        <!-- op nav js -->
        <script src="{{ url('main/js/jquery.nav.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{ url('main/js/owl.carousel.min.js')}}"></script>
        <script src="{{ url('main/js/slick.min.js')}}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{ url('main/js/isotope.pkgd.min.js')}}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{ url('main/js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{ url('main/js/wow.min.js')}}"></script>
        <!-- counter top js -->
        <script src="{{ url('main/js/waypoints.min.js')}}"></script>
        <!-- Skill bar js -->
        <script src="{{ url('main/js/skill.bars.jquery.js')}}"></script>
        <script src="{{ url('main/js/jquery.counterup.min.js')}}"></script>
        <!-- video js -->
        <script src="{{ url('main/js/jquery.mb.YTPlayer.min.js')}}"></script>
        <!-- magnific popup -->
        <script src="{{ url('main/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Nivo slider js -->
        <script src="{{ url('main/inc/custom-slider/js/jquery.nivo.slider.js')}}"></script>       
        <!-- plugins js -->
        <script src="{{ url('main/js/plugins.js')}}"></script>       
        <!-- rsmenu js -->
        <script src="{{ url('main/js/rsmenu-main.js')}}"></script>
        <!-- one page js -->
        <script src="{{ url('main/js/jquery.singlePageNav.min.js')}}"></script>
        <!-- moogle map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgC6ZapXdUzFdeQOFhdm_wucwlDMMQ8CQ"></script>
        <script src="{{ url('main/js/gmap.js')}}"></script> 
        <!-- main js -->
        <script src="{{ url('main/js/main.js')}}"></script>
        @yield('javascript')
    </body>
</html>