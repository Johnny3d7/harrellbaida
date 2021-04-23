@extends('main.main')

@section('stylesheets')

@endsection

@section('content')
    <!--Header Start-->
@include('main.partials.header')
<!--Header End-->

<!-- Main content Start -->
<div class="main-content">
            <!-- Slider Start -->
            <div id="rs-slider" class="rs-slider">
                <div class="bend niceties">
                    <div id="nivoSlider" class="slides">
                        <img src="{{ url('main/images/baida/v1.jpeg')}}" alt="" title="#slide-1" />
                        <img src="{{ url('main/images/baida/v3.jpg')}}" alt="" title="#slide-2" />
                        <img src="{{ url('main/images/baida/v8.jpg')}}" alt="" title="#slide-3" />
                        <img src="{{ url('main/images/baida/v6.jpg')}}" alt="" title="#slide-4" />
                    </div>
                    <!-- Slide 1 -->
                    <div id="slide-1" class="slider-direction">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <h1 class="sl-title white-color">Best Team <br/>
                                        For Growing Business</h1>
                                    <div class="sl-desc white-color">
                                        Quality First Consulting Service
                                        Best Consulting Service By Expert Team <br/>
                                        Provide Creative Business Thanking
                                        Best Opportunity For Growing Business</div>
                                    <div class="slider-botton">
                                        <ul>
                                            <li ><a href="#" class="readon border white-color">CONTACTEZ-NOUS</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div id="slide-2" class="slider-direction">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <h1 class="sl-title white-color">Best Consultant <br/>
                                        Service By Expert Team</h1>
                                    <div class="sl-desc white-color">
                                        Maecenas volutpat consequat orci id consectetur
                                        <br/>
                                        namvulput quam turpis
                                    </div>
                                    <div class="slider-botton">
                                        <ul>
                                            <li ><a href="#" class="readon border white-color">CONTACTEZ-NOUS</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div id="slide-3" class="slider-direction">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <h1 class="sl-title white-color">Best Consultant <br/>
                                        Service By Expert Team</h1>
                                    <div class="sl-desc white-color">
                                        Maecenas volutpat consequat orci id consectetur
                                        <br/>
                                        namvulput quam turpis
                                    </div>
                                    <div class="slider-botton">
                                        <ul>
                                            <li ><a href="#" class="readon border white-color">CONTACTEZ-NOUS</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div id="slide-4" class="slider-direction">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <h1 class="sl-title white-color">Best Consultant <br/>
                                        Service By Expert Team</h1>
                                    <div class="sl-desc white-color">
                                        Maecenas volutpat consequat orci id consectetur
                                        <br/>
                                        namvulput quam turpis
                                    </div>
                                    <div class="slider-botton">
                                        <ul>
                                            <li ><a href="#" class="readon border white-color">CONTACTEZ-NOUS</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider End -->

            <!-- Top History Start -->
            <div class="top-history">
                <div class="container-fluid">
                    <div class="row">
                        <!-- 1st col -->
                        <div class="col-md-4 col-sm-4">
                            <div class="history-column un">
                                <i data-icon="F" class="icon"></i>
                                <h4>Assainissement</h4>
                                <p>bStart is considered as one of the
                                 leading supplier of Web Applications
                                  including the head office in USA.</p>
                            </div>
                        </div>
                        <!-- 2st col -->
                        <div class="col-md-4 col-sm-4">
                            <div class="history-column deux">
                                <i data-icon="F" class="icon"></i>
                                <h4>Alimentation en eau</h4>
                                <p>bStart is considered as one of the
                                 leading supplier of Web Applications
                                  including the head office in USA.</p>
                            </div>
                        </div>
                        <!-- 3st col -->
                        <div class="col-md-4 col-sm-4">
                            <div class="history-column trois">
                                <i data-icon="Z" class="icon"></i>
                                <h4>Bâtiment et travaux public</h4>
                                <p>bStart is considered as one of the
                                 leading supplier of Web Applications
                                  including the head office in USA.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top History End -->

            <!-- About Us Start -->
            <section id="rs-about" class="rs-about pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 pr-md-65">
                            <div class="sec-title">
                                <h4>Baida Engineering</h4>
                                <h3>Le sceau de l'expertise</h3>
                            </div>
                            <p class="about-desc mt-5">Baida Engineering SARL est une entreprise qui a pour coeur de metier l'accès à l'eau,
                                la sauvegarde de l'environnement et de developpement durable. Elle intervient également dans l'import-export
                                des équipements hydrauliques (pompes solaires LORENTZ, ...etc.) et dans le domaine des bâtiments et des Travaux Publics.
                                Elle est composée d'un personnel hautement qualifiés, expérimenté et apte à garantie un travail de qualité à coût
                                raisonnable dans un delai convenu avec le client.
                            </p>

                            <div class="signature-text">
                                <p class="sign-title">-Henry James</p>
                                <span class="sign-subtitle">CEO, Your Company</span>
                                <img src="{{ url('main/images/about/signature.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 hidden-xs hidden-sm">
                            <div class="about-img">
                                <img src="{{ url('main/images/baida/v10.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Us End -->
            <!-- HOW WE WORK Start -->

            <div class="how-we-work defult-style gray-color pt-100 pb-70">
                <div class="container">
                    <div class="sec-title text-center">
                        <h3>Nos domaines d'activités</h3>
                        <h4 style="color: #3aaa35">Travaux</h4>
                    </div>
                </div>
                <div class="container">
                    <div class="work-sec-gallery">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="work-column">
                                    <div class="common-box">
                                        <img src="{{ url('main/images/work/1.jpg') }}" alt="">
                                    </div>
                                    <div class="work-gallery-caption">
                                        <h4><a href="#">Amenagement Hydro-agricole</a></h4>
                                        <p>
                                           Irrigation Agricole (gouttes à gouttes) ou par canaux à ciel ouvert.
                                           Cultures Hors sol.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="work-column">
                                    <div class="common-box">
                                        <img src="{{ url('main/images/work/2.jpg') }}" alt="">
                                    </div>
                                    <div class="work-gallery-caption">
                                        <h4><a href="#">Import-Export</a></h4>
                                        <p>
                                            Import-export des pompes solaires LORENTZ.
                                            Import-export d'autres équipements hydrauliques et d'appareils géophysiques.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 hidden-sm">
                                <div class="work-column">
                                    <div class="common-box">
                                        <img src="{{ url('main/images/work/3.jpg') }}" alt="">
                                    </div>
                                    <div class="work-gallery-caption">
                                        <h4><a href="#">Bâtiments et travaux public</a></h4>
                                        <p>
                                            Travaux de génie Civil.
                                            Travaux des voiries et réseaux divers (VRD)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="work-column">
                                    <div class="common-box">
                                        <img src="{{ url('main/images/work/1.jpg') }}" alt="">
                                    </div>
                                    <div class="work-gallery-caption">
                                        <h4><a href="#">Assainissement</a></h4>
                                        <p>
                                           Travaux de réalisation de réseaux d'assainissement.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="work-column">
                                    <div class="common-box">
                                        <img src="{{ url('main/images/work/2.jpg') }}" alt="">
                                    </div>
                                    <div class="work-gallery-caption">
                                        <h4><a href="#">Alimentation en eau potable (AEP)</a></h4>
                                        <p>
                                            Travaux de Forage, d'Hydraulique Villageoise (HV), d'Hydraulique Villageoise Ameliorée (HVA)
                                            et d'Hydraulique Urbaine (HU)
                                        </p>
                                    </div>
                                </div>
                            </div> <br>
                          <!--  <div class="col-md-4 col-sm-6 hidden-sm">
                                <div class="work-column">
                                    <div class="common-box">
                                        <img src="{{ url('main/images/work/3.jpg') }}" alt="">
                                    </div>
                                    <div class="work-gallery-caption">
                                        <h4><a href="#">Grow Up Your Business</a></h4>
                                        <p>
                                            Duis eleifend molestie leo, at mollis eros rutrum sit amet. Nam venenatis enim at magna euisei mod congue Mode.
                                        </p>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- HOW WE WORK END -->
            <!-- Responsibility Start -->
            <div class="rs-responsibiity sec-spacer gray-bg">
                <div class="container">
                    <div class="sec-title text-center">
                        <h3>Domaines de compétences</h3>
                        <h4 style="color: #3aaa35">Etudes</h4>
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
                                    <h4 class="services-title"><a href="services-details.html">Prospection Géophysique</a></h4>
                                    <p>Implantation de Forage d'eau : Localisation des aquifères en milieu cristallin et en milieu sédimentaire
                                        puis identification des sites favorables à la réalisation de forage positifs. <br>
                                        Investigations environnementales : Sondages des cartographies des couches géologiques souterraines à une profondeur
                                        d'investigation de 400m; Etude du niveau du socle; Etudes des couches argileuses souterraines; etc...
                                    </p>
                                </div>
                            </div>
                            <div class="services-item">
                                <div class="service-mid-icon">
                                    <a href="#"><span class="service-mid-icon-container"><i data-icon="8" class="icon"></i></span></a>
                                </div>
                                <div class="services-desc">
                                    <h4 class="services-title"><a href="services-details.html">Alimentation en eau potable</a></h4>
                                    <p>Etudes et conseils des projets d'alimentations en eau potable (AEP): Conception et dimensionnement de reseaux AEP;
                                        Suivi et contrôle des travaux d'AEP, d'Hydraulique villageoise ameliorée (HVA) et d'Hydraulique urbaine (HU)
                                    </p>
                                </div>
                            </div>
                            <div class="services-item">
								<div class="service-mid-icon left">
									<a href="#"><span class="service-mid-icon-container"><i data-icon=">" class="icon"></i></span></a>
								</div>
								<div class="services-desc">
									<h4 class="services-title"><a href="services-details.html">Assainissement</a></h4>
									<p>Etudes et conseils des projets d'assainissements : Conception et dimensionnement de réseau d'assainissement,
                                        suiviet contrôles des travaux.
                                    </p>
								</div>
							</div>
                        </div>
                        <div class="col-md-4 col-sm-12 text-center hidden-sm hidden-xs">
                            <div class="services-middle-img">
                                <img src="{{ url('main/images/baida/v2.jpg') }}" alt="Portfolio Image" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 text-left pl-30">
                            <div class="services-item">
                                <div class="service-mid-icon">
                                    <a href="#"><span class="service-mid-icon-container"><i data-icon="o" class="icon"></i></span></a>
                                </div>
                                <div class="services-desc">
                                    <h4 class="services-title"><a href="services-details.html">Environnement et développement durable</a></h4>
                                    <p>Evaluations environnementales et social, Etude d'impact environnemental et social,
                                        Management environnemental (Certifiacation ISO 14001) <br>
                                        Developpement durable : Objectifs de developpement durable, politique publiques de developpement durable,
                                        economie bleu, économie verte, économie circulaire, etc... <br>
                                        Changement Climatique : Inventaire de gaz à effet de serre, atténuation, adaptation au changement climatique,
                                        financements climatiques, etc...
                                    </p>
                                </div>
                            </div>
                            <div class="services-item">
                                <div class="service-mid-icon">
                                    <a href="#"><span class="service-mid-icon-container"><i data-icon="w" class="icon"></i></span></a>
                                </div>
                                <div class="services-desc">
                                    <h4 class="services-title"><a href="services-details.html">Bâtiment et travaux public</a></h4>
                                    <p>Etudes et conseils des projets de bâtiment et de Travaux publics : Conception, dimensionnement des ouvrages
                                        de génie civil, suivi et contrôle des Travaux, etc...
                                    </p>
                                </div>
                            </div>
                            <div class="services-item">
								<div class="service-mid-icon right">
									<a href="#"><span class="service-mid-icon-container"><i data-icon="_" class="icon"></i></span></a>
								</div>
								<div class="services-desc">
									<h4 class="services-title"><a href="services-details.html">Gestion des déchets</a></h4>
									<p>Etudes et conseils des projets de gestions et de valorisation des déchets : Caractérisation des déchets, Valorisation des déchets,
                                        marché des dechets, etc...
                                    </p>
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
                                <h3>Baida Enginnering</h3>
                                <p>
                                    l'expertise électro-hydraulique au coeur de vos métiers.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="cta-button text-right">
                                <a href="{{ route('contact') }}" class="readon border white">Rejoignez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Calltoaction End -->

            <!-- Services Start -->
            <section id="rs-services" class="rs-services services-carousel sec-spacer gray-color">
                <div class="container">
                    <div class="sec-title text-center">
                        <h3>What Kind Services We Offering</h3>
                        <p>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur<br/>
                            adipisci velit, sed quia non numquam eius modi
                        </p>
                    </div>
                    <div class="clfeatures">
                        <div class="row common-height clearfix">
                            <div class="col-md-7 col-sm-12 col-xs-12 nopadding-sm clearfix">
                                <div class="vertical-middle">
                                    <div class="col-padding clearfix">
                                        <div id="item-thumb" class="item-thumb">

                                            <div class="owl-dot">
                                                <img src="{{ url('main/images/service/1.jpg')}}" alt="">
                                                <h5 class="overlay-feature-title">
                                                    <a href="#">
                                                        Explanatory Models: Extendin
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="owl-dot">
                                                <img src="{{ url('main/images/service/2.jpg')}}" alt="" >
                                                <h5 class="overlay-feature-title">
                                                    <a href="#">
                                                        Why User Experience Matters
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="owl-dot">
                                                <img src="{{ url('main/images/service/3.jpg')}}" alt="" >
                                                <h5 class="overlay-feature-title">
                                                    <a href="#">
                                                        Unleashing the Benefits of A
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="owl-dot">
                                                <img src="{{ url('main/images/service/4.jpg')}}" alt="" >
                                                <h5 class="overlay-feature-title">
                                                    <a href="#">
                                                        How social media got serious
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="owl-dot">
                                                <img src="{{ url('main/images/service/5.jpg')}}" alt="" >
                                                <h5 class="overlay-feature-title">
                                                    <a href="#">
                                                        Social media is a vital tool
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="owl-dot">
                                                <img src="{{ url('main/images/service/6.jpg')}}" alt="" >
                                                <h5 class="overlay-feature-title">
                                                    <a href="#">
                                                        European Youth Study: Busine
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="owl-dot">
                                                <img src="{{ url('main/images/service/7.jpg')}}" alt="" >
                                                <h5 class="overlay-feature-title">
                                                    <a href="#">
                                                        Social media improve career
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="owl-dot">
                                                <img src="{{ url('main/images/service/8.jpg')}}" alt="" >
                                                <h5 class="overlay-feature-title">
                                                    <a href="#">
                                                        Introducing Generation Direc
                                                    </a>
                                                </h5>
                                            </div>

                                            <div class="owl-dot active">
                                                <img src="{{ url('main/images/service/9.jpg')}}" alt="" >
                                                <h5 class="overlay-feature-title">
                                                    <a href="#">
                                                        How digital is reworking the
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-12 col-xs-12 nopadding">

                                <div id="feature-left" class="menu-carousel owl-carousel image-carousel feature-left custom-js owl-loaded" data-animate-in="fadeIn" data-margin="0" data-nav="false" data-pagi="false" data-items="1">

                                    <div class="cl-ft-item">
                                        <a href="#">
                                            <img src="{{ url('main/images/service/1.jpg')}}" alt="" >
                                        </a>
                                        <div class="feature-content clearfix">
                                            <div class="heading-block">
                                                <h4 class="feature-title">
                                                    <a href="#">
                                                        Explanatory Models: Extendin
                                                    </a>
                                                </h4>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis voluptatum del eniti atque corrupti quos dolores.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cl-ft-item">
                                        <a href="#">
                                            <img src="{{ url('main/images/service/2.jpg')}}" alt="" >
                                        </a>
                                        <div class="feature-content clearfix">
                                            <div class="heading-block">
                                                <h4 class="feature-title">
                                                    <a href="#">
                                                        Why User Experience Matters
                                                    </a>
                                                </h4>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis voluptatum del eniti atque corrupti quos dolores.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cl-ft-item">
                                        <a href="#">
                                            <img src="{{ url('main/images/service/3.jpg')}}" alt="" >
                                        </a>
                                        <div class="feature-content clearfix">
                                            <div class="heading-block">
                                                <h4 class="feature-title">
                                                    <a href="#">
                                                        Unleashing the Benefits of A
                                                    </a>
                                                </h4>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis voluptatum del eniti atque corrupti quos dolores.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cl-ft-item">
                                        <a href="#">
                                            <img src="{{ url('main/images/service/4.jpg')}}" alt="" >
                                        </a>
                                        <div class="feature-content clearfix">
                                            <div class="heading-block">
                                                <h4 class="feature-title">
                                                    <a href="#">
                                                        How social media got serious
                                                    </a>
                                                </h4>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis voluptatum del eniti atque corrupti quos dolores.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cl-ft-item">
                                        <a href="#">
                                            <img src="{{ url('main/images/service/5.jpg')}}" alt="" >
                                        </a>
                                        <div class="feature-content clearfix">
                                            <div class="heading-block">
                                                <h4 class="feature-title">
                                                    <a href="#">
                                                        Social media is a vital tool
                                                    </a>
                                                </h4>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis voluptatum del eniti atque corrupti quos dolores.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cl-ft-item">
                                        <a href="#">
                                            <img src="{{ url('main/images/service/6.jpg')}}" alt="" >
                                        </a>
                                        <div class="feature-content clearfix">
                                            <div class="heading-block">
                                                <h4 class="feature-title"><a href="#">European Youth Study: Busine</a></h4>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis voluptatum del eniti atque corrupti quos dolores.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cl-ft-item">
                                        <a href="#">
                                            <img src="{{ url('main/images/service/7.jpg')}}" alt="" >
                                        </a>
                                        <div class="feature-content clearfix">
                                            <div class="heading-block">
                                                <h4 class="feature-title">
                                                    <a href="#">
                                                        Social media improve career
                                                    </a>
                                                </h4>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis voluptatum del eniti atque corrupti quos dolores.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cl-ft-item">
                                        <a href="#">
                                            <img src="{{ url('main/images/service/8.jpg')}}" alt="" >
                                        </a>
                                        <div class="feature-content clearfix">
                                            <div class="heading-block">
                                                <h4 class="feature-title">
                                                    <a href="#">
                                                        Introducing Generation Direc
                                                    </a>
                                                </h4>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis voluptatum del eniti atque corrupti quos dolores.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cl-ft-item">
                                        <a href="#">
                                            <img src="{{ url('main/images/service/9.jpg')}}" alt="" >
                                        </a>
                                        <div class="feature-content clearfix">
                                            <div class="heading-block">
                                                <h4 class="feature-title">
                                                    <a href="#">
                                                        How digital is reworking the
                                                    </a>
                                                </h4>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis voluptatum del eniti atque corrupti quos dolores.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services End -->

            <!-- Expertise Area satar -->
            {{--<div class="why-choose-us pt-94 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="choose-Us">
                                <div class="choose-Us-title">
                                    <h3>Why Choose Us</h3>
                                </div>
                                <div class="choose-Us-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam scelerisque tristique dolor vitae tincidunt. Aenean quis massa uada mi elementum elementum. Nec sapien convallis vulputate rhoncus vel dui.</p>
                                    <!-- main goal -->
                                    <div class="main-goal">
                                        <h5>Our main goals:</h5>
                                        <p>
                                            <i class="fa fa-angle-double-right"></i>
                                            <span>Blandit praesent luptatum zzril delenit augue duis dolore.</span>
                                        </p>
                                        <p>
                                            <i class="fa fa-angle-double-right"></i>
                                            <span>Eum iriure dolor in hendrerit in vulputate velit esse.</span>
                                        </p>
                                        <p>
                                            <i class="fa fa-angle-double-right"></i>
                                           <span>Blandit praesent luptatum zzril delenit augue duis ande.</span>
                                        </p>
                                        <p>
                                            <i class="fa fa-angle-double-right"></i>
                                            <span>Mueet spot between googles gidelines and what is merc.</span>
                                        </p>
                                        <p>
                                            <i class="fa fa-angle-double-right"></i>
                                            <span>Pellentesque ultrices ultrices sapien, nec tincidunt nunc.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="rs-skills" class="rs-skills gray-bg">
                                <div class="sec-title">
                                    <h3>Our Expertise Area</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum</p>
                                </div>

                                <!-- Team Details Start -->
                                <div id="rs-team-details" class="rs-team-details">
                                    <div class="member-details">
                                        <div class="cl-skill-bar">
                                            <!-- Start Skill Bar -->
                                            <div class="skillbar-title">Financial Consulting</div>
                                            <div class="skillbar" data-percent="68">
                                                <p class="skillbar-bar" style="width: 68%;"></p>
                                                <span class="skill-bar-percent">68%</span>
                                            </div>
                                            <!-- Start Skill Bar -->
                                            <div class="skillbar-title">Marketing Consulting</div>
                                            <div class="skillbar" data-percent="87">
                                                <p class="skillbar-bar" style="width: 87%;"></p>
                                                <span class="skill-bar-percent">87%</span>
                                            </div>
                                            <!-- Start Skill Bar -->
                                            <div class="skillbar-title">Business Consulting</div>
                                            <div class="skillbar" data-percent="80">
                                                <p class="skillbar-bar" style="width: 80%;"></p>
                                                <span class="skill-bar-percent">80%</span>
                                            </div>
                                            <!-- Start Skill Bar -->
                                            <div class="skillbar-title">Risk Management</div>
                                            <div class="skillbar mb-0" data-percent="87">
                                                <p class="skillbar-bar" style="width: 87%;"></p>
                                                <span class="skill-bar-percent">87%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Team Details End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>  --}}
            <!-- Expertise Area end -->

            <!-- HOW WE WORK Start -->
            {{-- <div class="how-we-work pt-100 pb-190 gray-color">
                <div class="container">
                    <div class="sec-title">
                        <h3>How We Work</h3>
                        <p>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,consectetur<br/>
                            adipisci velit, sed quia non numquam eius modi
                        </p>
                    </div>
                    <div class="work-sec-gallery">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="work-column">
                                    <div class="common-box">
                                        <img src="{{ url('main/images/work/work-1.jpg')}}" alt="">
                                    </div>
                                    <div class="work-gallery-caption">
                                        <h4>Sketch</h4>
                                        <p>
                                            Sed ut perspiciatis unde omnis natus error sit vo-luptatem accusantium dolore mque laudantium, totam rem
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="work-column">
                                    <div class="common-box">
                                        <img src="{{ url('main/images/work/work-3.jpg')}}" alt="">
                                    </div>
                                    <div class="work-gallery-caption">
                                        <h4>Design</h4>
                                        <p>
                                            Sed ut perspiciatis unde omnis natus error sit vo-luptatem accusantium dolore mque laudantium, totam rem
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="work-column">
                                    <div class="common-box">
                                        <img src="{{ url('main/images/work/work-4.jpg')}}" alt="">
                                    </div>
                                    <div class="work-gallery-caption">
                                        <h4>Analysis</h4>
                                        <p>
                                            Sed ut perspiciatis unde omnis natus error sit vo-luptatem accusantium dolore mque laudantium, totam rem
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="work-column">
                                    <div class="common-box">
                                        <img src="{{ url('main/images/work/work-2.jpg')}}" alt="">
                                    </div>
                                    <div class="work-gallery-caption">
                                        <h4>Development</h4>
                                        <p>
                                            Sed ut perspiciatis unde omnis natus error sit vo-luptatem accusantium dolore mque laudantium, totam rem
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- HOW WE WORK END -->

            <!-- Partner Start -->
            <div id="rs-defult-partner" class="rs-defult-partner gray-color pt-100 pb-100">
                <div class="container">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="partner-item">
                            <a href="#"><img src="{{ url('main/images/partner/1.png')}}" alt="Partner Image"></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="{{ url('main/images/partner/2.png')}}" alt="Partner Image"></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="{{ url('main/images/partner/3.png')}}" alt="Partner Image"></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="{{ url('main/images/partner/4.png')}}" alt="Partner Image"></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="{{ url('main/images/partner/5.png')}}" alt="Partner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner End -->
        </div>
@endsection

@section('javascript')
<script>
    $(document).ready(function(){
    $("#rs-header.transparent-header .menu-area .rs-menu ul li > a").css("color", "#ffffff");
    $(window).scroll(function(){
     var scroll = $(window).scrollTop();
       if(scroll>120){
        $("#rs-header.transparent-header .menu-area .rs-menu ul li > a").css("color", "#575656");
        console.log("scroll");
         }
         else {
            console.log("scrolling");
        $("#rs-header.transparent-header .menu-area .rs-menu ul li > a").css("color", "#ffffff");
         }
        });
     });
  </script>
@endsection


