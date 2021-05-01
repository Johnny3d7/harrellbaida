@extends('main.partials.otherlayout')

@section('stylesheets')

@endsection

@section('page-title')
Valeurs & Ethique
@endsection

@section('sub-content')

<!-- About Us Start -->
<section id="rs-about" class="rs-about pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-7 pr-md-65">
                <div class="sec-title">
                    <h4>Our Success Story</h4>
                    <h3>World Best Consulting Agency</h3>
                </div>
                <p class="about-desc">Suspendisse ex neque, sollicitudin in velit eu, luctus gravida nunc. Nulla pul-vinar risus sed metus euismod sodales ut sed nisi. Nulla posuere suscipit finibus. Quisque place vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor lacus egestas. Nunc erat libero. Free online Lorem Ipsum dummy neque porro quisquam est. It uses a dictionary of over 200 Latin words, combined with a handful of model.</p>

                <p class="about-desc margin-remove">It uses a dictionary of over 200 Latin words, combined with a handful of model view structures, to generate Lorem Ipsum which looks reasonable. At vero eos et iusto odio dignissimos ducimus qui blanditiis voluptatum del eniti atque.</p>
            </div>
            <div class="col-md-5 mpt-40">
                <div class="video-section-area">
                    <img src="images/video/video.jpg" alt="">
                    <a class="popup-videos" href="https://www.youtube.com/watch?v=YLN1Argi7ik" title="Video Icon">
                        <img class="video-icon" src="images/video/video-icon.png" alt="">
                    </a>
                    <div class="overly-border"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us End -->

<!-- Counter Up Section Start Here-->
<div class="counter-top-area gap-50 pt-100 pb-100">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="rs-count">
                <!-- COUNTER-LIST START -->
                <div class="col-md-3 col-sm-6  wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
                    <div class="rs-counter-list">
                        <i data-icon="W" class="icon"></i>
                        <h3 class="rs-counter">25000</h3>
                        <h4>Client Retentions</h4>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-md-3 col-sm-6  wow fadeInUp" data-wow-duration=".7s" data-wow-delay="300ms">
                    <div class="rs-counter-list">
                        <i data-icon="C" class="icon"></i>
                        <h3 class="rs-counter">33028</h3>
                        <h4>Satisfied Clients</h4>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-md-3 col-sm-6  wow fadeInUp" data-wow-duration=".9s" data-wow-delay="300ms">
                    <div class="rs-counter-list">
                        <i data-icon="P" class="icon"></i>
                        <h3 class="rs-counter">25</h3>
                        <h4>Years of Service</h4>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-md-3 col-sm-6  wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="300ms">
                    <div class="rs-counter-list">
                        <i data-icon="&#xe001;" class="icon"></i>
                        <h3 class="rs-counter">339</h3>
                        <h4 class="last">Professionals</h4>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->
            </div>
        </div>
    </div>
</div>
<!-- Counter Down Section End Here-->

<!-- Responsibility Start -->
<div class="rs-responsibiity sec-spacer gray-bg">
    <div class="container">
        <div class="sec-title text-center">
            <h3>Our Responsibilities</h3>
            <h4>We Always Careful of Our Responsibility</h4>
        </div>
    </div>
    <div class="container">
        <div class="row services-wrap">
            <div class="col-md-4 col-sm-12 text-right gap-30 pr-30">
                <div class="services-item">
                    <div class="service-mid-icon">
                        <a href="#"><span class="service-mid-icon-container"><i data-icon="m" class="icon"></i></span></a>
                    </div>
                    <div class="services-desc">
                        <h4 class="services-title"><a href="services-details.html">Web Analytics</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur ex quis maximus. Mauris vel diam.</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="service-mid-icon">
                        <a href="#"><span class="service-mid-icon-container"><i data-icon="8" class="icon"></i></span></a>
                    </div>
                    <div class="services-desc">
                        <h4 class="services-title"><a href="services-details.html">Pay-Per-Click</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur ex quis maximus. Mauris vel diam.</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="service-mid-icon left">
                        <a href="#"><span class="service-mid-icon-container"><i data-icon=">" class="icon"></i></span></a>
                    </div>
                    <div class="services-desc">
                        <h4 class="services-title"><a href="services-details.html">SEO Services</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur ex quis maximus. Mauris vel diam.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 text-center hidden-sm hidden-xs">
                <div class="services-middle-img">
                    <img src="{{ url('main/images/baida/v14.jpg') }}" alt="Portfolio Image" />
                </div>
            </div>
            <div class="col-md-4 col-sm-12 text-left pl-30">
                <div class="services-item">
                    <div class="service-mid-icon">
                        <a href="#"><span class="service-mid-icon-container"><i data-icon="o" class="icon"></i></span></a>
                    </div>
                    <div class="services-desc">
                        <h4 class="services-title"><a href="services-details.html">SEO Link BUilding</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur ex quis maximus. Mauris vel diam.</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="service-mid-icon">
                        <a href="#"><span class="service-mid-icon-container"><i data-icon="w" class="icon"></i></span></a>
                    </div>
                    <div class="services-desc">
                        <h4 class="services-title"><a href="services-details.html">Site Mapping</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur ex quis maximus. Mauris vel diam.</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="service-mid-icon right">
                        <a href="#"><span class="service-mid-icon-container"><i data-icon="_" class="icon"></i></span></a>
                    </div>
                    <div class="services-desc">
                        <h4 class="services-title"><a href="services-details.html">Site Auditing</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur ex quis maximus. Mauris vel diam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Responsibility End -->

<!-- Calltoaction Start -->
<div id="rs-cta" class="rs-cta primary-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="cta-content">
                    <h3>Be Start  Project Right Now</h3>
                    <p>
                        Passionate people and with the best tools and approaches at your disposal.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="cta-button text-right">
                    <a href="#" class="readon border white">JOIN NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Calltoaction End -->

<!-- Main content End -->


@endsection

@section('javascript')

@endsection
