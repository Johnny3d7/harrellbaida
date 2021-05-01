@extends('main.main')

@section('stylesheets')

@endsection

@section('content')

<!--Header Start-->
<header id="rs-header">
    <!-- Toolbar Start -->
    <div class="toolbar-area hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-7 col-xs-12">
                    <div class="toolbar-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i><a href="tel:+2250708455763">(+225) 0708455763</a></li>

                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@yourwebsite.com">ballobih@yahoo.fr</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-5 col-xs-12">
                    <div class="toolbar-sl-share">
                        <ul>
                            <li class="follow">Suivez-nous</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Toolbar End -->

    <!-- Header Menu Start -->
    <div class="menu-area menu-sticky">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo-area">
                        <a href="{{ route('home') }}"><img id="logosec" style="height:80px; width:auto;" src="{{ url('main/images/baida/logo.png') }}" alt="logo"></a>
                    </div>
                </div>
                @include('main.partials.menu')
            </div>
        </div>
    </div>
    <!-- Header Menu End -->
</header>
<!--Header End-->
<div class="main-content">
    <div class="rs-breadcrumbs sec-spacer sec-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">@yield('page-title')</h1>
                        <ul>
                            <li>
                                <a class="active" href="{{ route('home') }}">Accueil</a>
                            </li>
                            <li>@yield('page-title')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    @yield('sub-content')
</div>
<!-- Breadcrumbs Start -->
@endsection

@section('javascript')

@endsection
