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
    <!-- Services Section Start -->
			<div class="our-hostory-section mt-100 mb-100">
				<div class="container">
					<div class="row">
						<!-- titmeline Start -->
						<div class="rs-titmeline">
							<div class="col-sm-12">
								<div class="rs-timeline">
									<div class="rs-timeline-block">
										<div class="rs-timeline-icon">
											<i class="fa fa-pencil"></i>
										</div>
										<div class="rs-timeline-content">
											<h3>Establishment of Company</h3>
											<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
											<a href="#0" class="rs-read-more">Read more</a>
											<span class="rs-date">Jan 14 2010</span>
										</div>
									</div>

									<div class="rs-timeline-block">
										<div class="rs-timeline-icon">
											<i class="fa fa-image"></i>
										</div>

										<div class="rs-timeline-content">
											<a href="#">
												<img src="images/about/counter-up.jpg" alt="Timeline Image">
											</a>
											<h3><a href="#">Increase emplies by 6 members</a></h3>
											<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
											<a href="#0" class="rs-read-more">Read more</a>
											<span class="rs-date">March 18 2014</span>
										</div>
									</div>

									<div class="rs-timeline-block">
										<div class="rs-timeline-icon">
											<i class="fa fa-video-camera"></i>
										</div>

										<div class="rs-timeline-content">
											<video controls="">
												<source src="https://0.s3.envato.com/h264-video-previews/dc4f42f5-8742-4e3c-bb1a-41e292b4aa11/17885303.mp4" type="video/mp4">
											</video>
											<h3><a href="#">Registration of Company</a></h3>
											<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
											<a href="#0" class="rs-read-more">Read more</a>
											<span class="rs-date">Feb 14 2015</span>
										</div>
									</div>

									<div class="rs-timeline-block">
										<div class="rs-timeline-icon">
											<i class="fa fa-youtube"></i>
										</div>

										<div class="rs-timeline-content">
                                            <iframe height="350" src="https://www.youtube.com/embed/K3Lg3NSTeV4?&amp;rel=0&amp;loop=1&amp;showinfo=0&amp;disablekb=1&amp;modestbranding=1&amp;controls=0&amp;hd=1&amp;autohide=1&amp;color=white&amp;wmode=opaque" allowfullscreen=""></iframe>

											<h3><a href="#">Branches open in International</a></h3>
											<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
											<a href="#0" class="rs-read-more">Read more</a>
											<span class="rs-date">Apr 19 2016</span>
										</div>
									</div>

									<div class="rs-timeline-block">
										<div class="rs-timeline-icon">
											<i class="fa fa-rocket"></i>
										</div>

										<div class="rs-timeline-content">
											<h3>Opened 6 Offices Worldwide</h3>
											<blockquote>
												<p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
												<small>From WWF's website</small>
											</blockquote>
											<span class="rs-date">Feb 26 2018</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- titmeline End -->
					</div>
				</div>
			</div>
			<!-- Services Section End -->

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
