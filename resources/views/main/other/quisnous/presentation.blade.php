@extends('main.partials.otherlayout')

@section('stylesheets')

@endsection

@section('page-title')
Présentation
@endsection

@section('sub-content')
     <!-- Accordion Start -->
     <section class="rs-about-3 pt-100 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="sec-title">
                        <h4>BAÏDA</h4>
                        <h3>En bref</h3>
                    </div>
                    <p class="about-desc">Baïda Engineering SARL est une entreprise qui a pour coeur de metier l'accès à l'eau, la sauvegarde de l'environnement et de developpement durable.
                        Elle intervient également dans l'import-export des équipements hydrauliques (pompes solaires LORENTZ, ...etc.) et dans le domaine des bâtiments et des Travaux Publics.
                        Elle est composée d'un personnel hautement qualifiés, expérimenté et apte à garantie un travail de qualité à coût raisonnable dans un delai convenu avec le client.</p>
                </div>
                <div class="col-md-5 mpt-20">
                    <!-- panel start -->
                    <div class="panel-group mb-0" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Notre Histoire</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                   <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Notre Mission</a>
                                </h4>
                            </div>
                            <div id="collapseTen" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Notre Vision</a>
                                </h4>
                            </div>
                            <div id="collapseEleven" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- panel end -->
                </div>
            </div>
        </div>
    </section>
    <!-- Accordion Us End -->

    <!-- What Responsibiity We Offer -->
    <div class="rs-responsibiity rs-about-3 pt-100 pb-100 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="services-middle-img pr-md-50">
                        <img src="{{ url('main/images/baida/v15.jpg') }}" alt="Service Image" />
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mpt-40">
                    <div class="sec-title">
                        <h4>Our Responsibilities</h4>
                        <h3>Notre savoir-faire</h3>
                    </div>

                    <div class="services-item">
                        <div class="service-mid-icon">
                            <a href="#"><span class="service-mid-icon-container"><i data-icon="7" class="icon"></i></span></a>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title"><a href="services-details.html">Prospection Géophysique</a></h4>
                            <p>Implantation de forage d'eau: Localisation des aquifères en milieu sédimentaires puis identification des sites favorables à la réalisation des forages positifs.</p>
                        </div>
                    </div>
                    <div class="services-item">
                        <div class="service-mid-icon">
                            <a href="#"><span class="service-mid-icon-container"><i data-icon="C" class="icon"></i></span></a>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title"><a href="services-details.html">Investigation environnementale</a></h4>
                            <p>Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor lacus egestas.</p>
                        </div>
                    </div>
                    <div class="services-item">
                        <div class="service-mid-icon">
                            <a href="#"><span class="service-mid-icon-container"><i data-icon="&#xe00a;" class="icon"></i></span></a>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title"><a href="services-details.html">Réalisation de systèmes d'approvisionnement en eau potable (HV, HVA, HU)</a></h4>
                            <p>Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor lacus egestas.</p>
                        </div>
                    </div>
                    <div class="services-item">
                        <div class="service-mid-icon left">
                            <a href="#"><span class="service-mid-icon-container"><i data-icon=">" class="icon"></i></span></a>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title"><a href="services-details.html">Fourniture et installation de pompe solaire immergée pour l'eau de boisson et de pompe solaire de surface de l'irrigation agricole et les piscines</a></h4>
                            <p>Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor lacus egestas.</p>
                        </div>
                    </div>
                    <div class="services-item">
                        <div class="service-mid-icon">
                            <a href="#"><span class="service-mid-icon-container"><i data-icon="&#xe00a;" class="icon"></i></span></a>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title"><a href="services-details.html">Environnement et Développement durable</a></h4>
                            <p>Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor lacus egestas.</p>
                        </div>
                    </div>
                    <div class="services-item">
                        <div class="service-mid-icon">
                            <a href="#"><span class="service-mid-icon-container"><i data-icon="&#xe00a;" class="icon"></i></span></a>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title"><a href="services-details.html">Assainissement</a></h4>
                            <p>Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor lacus egestas.</p>
                        </div>
                    </div>
                    <div class="services-item">
                        <div class="service-mid-icon">
                            <a href="#"><span class="service-mid-icon-container"><i data-icon="&#xe00a;" class="icon"></i></span></a>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title"><a href="services-details.html">Bâtiment et Travaux Public (BTP)</a></h4>
                            <p>Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor lacus egestas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Responsibiity End -->

    <!-- About Us Start -->
    <section id="rs-about" class="rs-about pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-7 pr-md-65">
                    <div class="sec-title">
                        <h4>Our Success Story</h4>
                        <h3>We Provide Best Sollution</h3>
                    </div>
                    <p class="about-desc mt-5">Suspendisse ex neque, sollicitudin in velit eu, luctus gravida nunc. Nulla pul-vinar risus sed metus euismod sodales ut sed nisi. Nulla posuere suscipit finibus. Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor lacus egestas. Nunc erat libero. Free online Lorem Ipsum dummy text generator with great features.
                    We has survived not only five centuries.when an unknown</p>

                    <p class="about-desc margin-remove">printer took a galley of type and scrambled it to make a type specimen book. Nunc erat libero. Free online Lorem Ipsum dummy text generator with great features.
                    We has survived not only five centuries.when an unknown</p>
                </div>
                <div class="col-md-5 mpt-40">
                    <div class="video-section-area">
                        <img src="{{ url('main/images/video/video.jpg') }}" alt="">
                        <a class="popup-videos" href="https://www.youtube.com/watch?v=YLN1Argi7ik" title="Video Icon">
                            <img class="video-icon" src="{{ url('main/images/video/video-icon.png') }}" alt="">
                        </a>
                        <div class="overly-border"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <!-- Partner Start -->


    <div id="rs-defult-partner" class="rs-defult-partner gray-color pt-100 pb-100">
        <div class="container">

            <div class="sec-title">
                <h3>NOS PARTENAIRES</h3>
                <h7>ils nous ont fait confiance</h7>
            </div>


            <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="true" data-md-device-dots="false">
                <div class="partner-item">
                    <a href="#"><img src="images/partner/1.png" alt="Partner Image"></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="images/partner/2.png" alt="Partner Image"></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="images/partner/3.png" alt="Partner Image"></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="images/partner/4.png" alt="Partner Image"></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="images/partner/5.png" alt="Partner Image"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner End -->


@endsection

@section('javascript')

@endsection
