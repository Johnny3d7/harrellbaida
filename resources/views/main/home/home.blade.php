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
                            <div class="history-column">
                                <i data-icon="F" class="icon"></i>
                                <h4>Our history</h4>
                                <p>bStart is considered as one of the
                                 leading supplier of Web Applications
                                  including the head office in USA.</p>
                            </div>
                        </div>
                        <!-- 2st col -->
                        <div class="col-md-4 col-sm-4">
                            <div class="history-column">
                                <i data-icon="7" class="icon"></i>
                                <h4>Our mission</h4>
                                <p>bStart is considered as one of the
                                 leading supplier of Web Applications
                                  including the head office in USA.</p>
                            </div>
                        </div>
                        <!-- 3st col -->
                        <div class="col-md-4 col-sm-4">
                            <div class="history-column">
                                <i data-icon="6" class="icon"></i>
                                <h4>Our vision</h4>
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
                                <h4>About Us</h4>
                                <h3>With 20 Years of Experience</h3>
                            </div>
                            <p class="about-desc mt-5">Suspendisse ex neque, sollicitudin in velit eu, luctus gravida nunc. Nulla pul-vinar risus sed metus euismod sodales ut sed nisi. Nulla posuere suscipit finibus. Quisque place vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor lacus egestas. Nunc erat libero. Free online Lorem Ipsum dummy neque porro quisquam est</p>
                            <p>
                                It uses a dictionary of over 200 Latin words, combined with a handful of model view structures, to generate Lorem Ipsum which looks reasonable. At vero eos et iusto odio dignissimos ducimus qui blanditiis voluptatum del eniti atque.
                            </p>
                            <div class="signature-text">
                                <p class="sign-title">-Henry James</p>
                                <span class="sign-subtitle">CEO, Your Company</span>
                                <img src="{{ url('main/images/about/signature.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 hidden-xs hidden-sm">
                            <div class="about-img">
                                <img src="{{ url('main/images/service/5.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Us End -->

            <!-- Calltoaction Start -->
            <div id="rs-cta" class="rs-cta primary-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="cta-content">
                                <h3>Start Your Project Right</h3>
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
            <div class="why-choose-us pt-94 pb-90">
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
            </div>
            <!-- Expertise Area end -->

            <!-- HOW WE WORK Start -->
            <div class="how-we-work pt-100 pb-190 gray-color">
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
            </div>
            <!-- HOW WE WORK END -->

            <!-- Counter Up Section Start Here-->
			<div class="counter-top-area">
				<div class="form-overlay"></div>
				<div class="container">
					<div class="row rs-vertical-middle">
						<div class="col-md-6 col-sm-12 support-section">
							<div class="form-inner">
                                <form id="quick-form" method="post" action="mailer.php">
                                    <div class="need-query">
                                        <h3>Need a Quick Query</h3>
                                    </div>
                                    <div class="quick-form">
                                        <input type="text" id="name" name="name" placeholder="Name" required>
                                        <input type="email" id="email" name="email" placeholder="Emaill Address" required>
                                        <input type="text" id="number" name="number" placeholder="Phone Number" required>
                                        <textarea id="message" name="message" placeholder="Your Message"></textarea>
                                        <input class="submit" type="submit" value="SUBMIT">
                                    </div>
                                </form>
                            </div>
						</div>

						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="rs-count sidebar-count mpt-40">
								<div class="row">
									<!-- COUNTER-LIST START -->
									<div class="col-sm-6  wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
										<div class="rs-counter-list">
											<i data-icon="W" class="icon"></i>
											<h3 class="rs-counter parsent">100</h3>
											<h4>Client Retentions</h4>
										</div>
									</div>
									<!-- COUNTER-LIST END -->
									<!-- COUNTER-LIST START -->
									<div class="col-sm-6  wow fadeInUp" data-wow-duration=".7s" data-wow-delay="300ms">
										<div class="rs-counter-list">
											<i data-icon="C" class="icon"></i>
											<h3 class="rs-counter">33028</h3>
											<h4>Satisfied Clients</h4>
										</div>
									</div>
								</div>
								<div class="row">
									<!-- COUNTER-LIST END -->
									<!-- COUNTER-LIST START -->
									<div class="col-sm-6  wow fadeInUp" data-wow-duration=".9s" data-wow-delay="300ms">
										<div class="rs-counter-list">
											<i data-icon="P" class="icon"></i>
											<h3 class="rs-counter">25</h3>
											<h4>Years of Service</h4>
										</div>
									</div>
									<!-- COUNTER-LIST END -->
									<!-- COUNTER-LIST START -->
									<div class="col-sm-6  wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="300ms">
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
				</div>
			</div>
			<!-- Counter Down Section End Here-->

            <!-- Team Start -->
            <section id="rs-team" class="rs-team sec-spacer">
                <div class="container">
                    <div class="sec-title text-center">
                        <h3>Meet Our Team</h3>
                        <p>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur<br/>
                            adipisci velit, sed quia non numquam eius modi
                        </p>
                    </div>
                    <div class="team-carousel owl-carousel owl-navigation-yes">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ url('main/images/team/1.jpg')}}" alt="team Image" />
                            </div>
                            <div class="team-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <i class="fa fa-user-circle-o team-icon"></i>
                                        <h4 class="team-name">Abr.Rashid Khan</h4>
                                        <span class="team-title">FOUNDER & CEO</span>
                                        <p class="team-desc">Praesent sit amet ultricies orci. Sed blandit aliquet velit semper conval Nam cursus ullamcorper.</p>
                                        <div class="team-social">
                                            <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ url('main/images/team/2.jpg')}}" alt="team Image" />
                            </div>
                            <div class="team-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <i class="fa fa-user-circle-o team-icon"></i>
                                        <h4 class="team-name">Masud Rana</h4>
                                        <span class="team-title">MANAGER</span>
                                        <p class="team-desc">Praesent sit amet ultricies orci. Sed blandit aliquet velit semper conval Nam cursus ullamcorper.</p>
                                        <div class="team-social">
                                            <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ url('main/images/team/3.jpg')}}" alt="team Image" />
                            </div>
                            <div class="team-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <i class="fa fa-user-circle-o team-icon"></i>
                                        <h4 class="team-name">Mahabub Alam</h4>
                                        <span class="team-title">CTO & DEVELOPER</span>
                                        <p class="team-desc">Praesent sit amet ultricies orci. Sed blandit aliquet velit semper conval Nam cursus ullamcorper.</p>
                                        <div class="team-social">
                                            <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ url('main/images/team/4.jpg')}}" alt="team Image" />
                            </div>
                            <div class="team-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <i class="fa fa-user-circle-o team-icon"></i>
                                        <h4 class="team-name">Abr.Rashid Khan</h4>
                                        <span class="team-title">FOUNDER & CEO</span>
                                        <p class="team-desc">Praesent sit amet ultricies orci. Sed blandit aliquet velit semper conval Nam cursus ullamcorper.</p>
                                        <div class="team-social">
                                            <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ url('main/images/team/5.jpg')}}" alt="team Image" />
                            </div>
                            <div class="team-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <i class="fa fa-user-circle-o team-icon"></i>
                                        <h4 class="team-name">Masud Rana</h4>
                                        <span class="team-title">MANAGER</span>
                                        <p class="team-desc">Praesent sit amet ultricies orci. Sed blandit aliquet velit semper conval Nam cursus ullamcorper.</p>
                                        <div class="team-social">
                                            <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ url('main/images/team/6.jpg')}}" alt="team Image" />
                            </div>
                            <div class="team-content">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <i class="fa fa-user-circle-o team-icon"></i>
                                        <h4 class="team-name">Mahabub Alam</h4>
                                        <span class="team-title">CTO & DEVELOPER</span>
                                        <p class="team-desc">Praesent sit amet ultricies orci. Sed blandit aliquet velit semper conval Nam cursus ullamcorper.</p>
                                        <div class="team-social">
                                            <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team end -->

            <!-- Pricing Tables Start -->
            <section id="rs-pricing" class="rs-pricing gray-color pt-100 pb-70">
                <div class="container">
                    <div class="sec-title text-center">
                        <h3>Our Pricing Plans</h3>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur<br/>
                         adipisci velit, sed quia non numquam eius modi
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing-plan">
                                <div class="pricing-head">
                                    <div class="name">
                                        SILVER
                                    </div>
                                    <div class="price">
                                        <span class="value">
                                            <sup>$</sup>30
                                        </span>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul>
                                        <li>
                                            <strong>256MB</strong> MEMORY
                                        </li>
                                        <li>
                                            <strong>1</strong> USER
                                        </li>
                                        <li>
                                            <strong>1</strong> WEBSITE
                                        </li>
                                        <li>
                                            <strong>1</strong> DOMAIN
                                        </li>
                                        <li>
                                            <strong>UNLIMITED</strong> BANDWIDTH
                                        </li>
                                        <li>
                                            <strong>24/7</strong> SUPPORT
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing-footer">
                                    <a href="#" class="p-button">SELECT</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing-plan featured">
                                <div class="pricing-head">
                                    <div class="name">
                                        BASIC
                                    </div>
                                    <div class="price">
                                        <span class="value">
                                            <sup>$</sup>30
                                        </span>
                                        <span class="duration">
                                            / MO
                                        </span>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul>
                                        <li>
                                            <strong>256MB</strong> MEMORY
                                        </li>
                                        <li>
                                            <strong>1</strong> USER
                                        </li>
                                        <li>
                                            <strong>1</strong> WEBSITE
                                        </li>
                                        <li>
                                            <strong>1</strong> DOMAIN
                                        </li>
                                        <li>
                                            <strong>UNLIMITED</strong> BANDWIDTH
                                        </li>
                                        <li>
                                            <strong>24/7</strong> SUPPORT
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing-footer">
                                    <a href="#" class="p-button">SELECT</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm">
                            <div class="pricing-plan">
                                <div class="pricing-head">
                                    <div class="name">
                                        BASIC
                                    </div>
                                    <div class="price">
                                        <span class="value">
                                            <sup>$</sup>30
                                        </span>
                                        <span class="duration">
                                            / MO
                                        </span>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul>
                                        <li>
                                            <strong>256MB</strong> MEMORY
                                        </li>
                                        <li>
                                            <strong>1</strong> USER
                                        </li>
                                        <li>
                                            <strong>1</strong> WEBSITE
                                        </li>
                                        <li>
                                            <strong>1</strong> DOMAIN
                                        </li>
                                        <li>
                                            <strong>UNLIMITED</strong> BANDWIDTH
                                        </li>
                                        <li>
                                            <strong>24/7</strong> SUPPORT
                                        </li>
                                    </ul>
                                </div>
                                <div class="pricing-footer">
                                    <a href="#" class="p-button">SELECT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Pricing Tables End -->

            <!-- Portfolio Start -->
            <section id="rs-portfolio" class="rs-portfolio pt-100 pb-70">
                <div class="container">
                    <div class="sec-title text-center">
                        <h3>Our Portfolio</h3>
                        <p>CNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet,       consectetur<br/>
                            adipisci velit, sed quia non numquam eius modi
                        </p>
                    </div>
                    <div class="portfolio-filter">
                        <button class="active" data-filter="*">ALL PROJECT</button>
                        <button data-filter=".filter1">PROFILE</button>
                        <button data-filter=".filter2">BUSINESS</button>
                        <button data-filter=".filter3">FINANCE</button>
                        <button data-filter=".filter4">MARKETING</button>
                    </div>
                    <div class="row">
                        <div class="grid">
                            <div class="col-md-4 col-sm-6 col-xs-6 grid-item mb-30 filter1">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img src="{{ url('main/images/portfolio/1.jpg')}}" alt="Portfolio Image" />
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <a class="image-popup p-zoom" href="images/portfolio/1.jpg')}}" title="Project Title">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 grid-item mb-30 filter2 filter3">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img src="{{ url('main/images/portfolio/2.jpg')}}" alt="Portfolio Image" />
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <a class="image-popup p-zoom" href="images/portfolio/2.jpg')}}" title="Project Title">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 grid-item mb-30 filter1">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img src="{{ url('main/images/portfolio/3.jpg')}}" alt="Portfolio Image" />
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <a class="image-popup p-zoom" href="images/portfolio/3.jpg')}}" title="Project Title">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 grid-item mb-30 filter2 filter4">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img src="{{ url('main/images/portfolio/4.jpg')}}" alt="Portfolio Image" />
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <a class="image-popup p-zoom" href="images/portfolio/4.jpg')}}" title="Project Title">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 grid-item mb-30 filter1">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img src="{{ url('main/images/portfolio/5.jpg')}}" alt="Portfolio Image" />
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <a class="image-popup p-zoom" href="images/portfolio/5.jpg')}}" title="Project Title">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 grid-item mb-30 filter3">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img src="{{ url('main/images/portfolio/6.jpg')}}" alt="Portfolio Image" />
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <a class="image-popup p-zoom" href="images/portfolio/6.jpg')}}" title="Project Title">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 grid-item mb-30 filter2 filter3">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img src="{{ url('main/images/portfolio/7.jpg')}}" alt="Portfolio Image" />
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <a class="image-popup p-zoom" href="images/portfolio/7.jpg')}}" title="Project Title">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 grid-item mb-30 filter1 filter4">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img src="{{ url('main/images/portfolio/8.jpg')}}" alt="Portfolio Image" />
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <a class="image-popup p-zoom" href="images/portfolio/8.jpg')}}" title="Project Title">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 hidden-sm col-xs-6 grid-item mb-30 filter3">
                                <div class="portfolio-item">
                                    <div class="portfolio-img">
                                        <img src="{{ url('main/images/portfolio/9.jpg')}}" alt="Portfolio Image" />
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <a class="image-popup p-zoom" href="images/portfolio/9.jpg')}}" title="Project Title">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Portfolio End -->

            <!-- Testimonial Start -->
            <section id="rs-testimonial" class="rs-testimonial gray-color sec-spacer">
                <div class="container">
                    <div class="sec-title text-center">
                        <h3>Our Customer Reviews</h3>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur<br/>
                        adipisci velit, sed quia non numquam eius modi</p>
                    </div>
                    <div class="testi-carousel">
                        <div class="testi-item">
                            <ul class="nav nav-tabs testi-filter row">
                                <li class="active col-md-4 col-sm-4 col-xs-6">
                                    <a data-toggle="tab" href="#tab1">
                                        <div class="testi-img">
                                            <img src="{{ url('main/images/testimonial/1.jpg')}}" alt="Client Image">
                                        </div>
                                        <h5 class="testi-name">MAHABUB ALAM</h5>
                                        <span class="testi-title">CEO</span>
                                    </a>
                                </li>
                                <li class="col-md-4 col-sm-4 col-xs-6">
                                    <a data-toggle="tab" href="#tab2">
                                        <div class="testi-img">
                                            <img src="{{ url('main/images/testimonial/2.jpg')}}" class="testi-img" alt="Client Image">
                                        </div>
                                        <h5 class="testi-name">IRINA ANDRE</h5>
                                        <span class="testi-title">MANAGER</span>
                                    </a>
                                </li>
                                <li class="col-md-4 col-sm-4 hidden-xs">
                                    <a data-toggle="tab" href="#tab3">
                                        <div class="testi-img">
                                            <img src="{{ url('main/images/testimonial/3.jpg')}}" class="testi-img" alt="Client Image">
                                        </div>
                                        <h5 class="testi-name">YAMIN HOSSEN</h5>
                                        <span class="testi-title">DEVELOPER</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab1" class="tab-pane animated flipInX in active">
                                    <div class="testi-content">
                                        <p>Quisque quis volutpat ex. Nunc in lacus lectus. Duis sodales in arcu vitae commodo. Proin aliquam viverra dignissim. Nunc viverra lacus id vulputate pharetra. Vivamus bibendum auctor erat, at consequat turpis efficitur nec.</p>
                                    </div>
                                </div>
                                <div id="tab2" class="tab-pane animated flipInX">
                                    <div class="testi-content">
                                        <p>Nunc in lacus lectus. Duis sodales in arcu vitae commodo. Proin aliquam viverra dignissim. Nunc viverra lacus id vulputate pharetra. Vivamus bibendum auctor erat, at consequat turpis efficitur nec. Maecenas vel eros arcu.</p>
                                    </div>
                                </div>
                                <div id="tab3" class="tab-pane animated flipInX">
                                    <div class="testi-content">
                                        <p>Duis sodales in arcu vitae commodo. Proin aliquam viverra dignissim. Nunc viverra lacus id vulputate pharetra. Vivamus bibendum auctor erat, at consequat turpis efficitur nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <ul class="nav nav-tabs testi-filter row">
                                <li class="active col-md-4 col-sm-4 col-xs-6">
                                    <a data-toggle="tab" href="#tab4">
                                        <div class="testi-img">
                                            <img src="{{ url('main/images/testimonial/4.jpg')}}" alt="Client Image">
                                        </div>
                                        <h5 class="testi-name">LUNA STURAT</h5>
                                        <span class="testi-title">DESIGNER</span>
                                    </a>
                                </li>
                                <li class="col-md-4 col-sm-4 col-xs-6">
                                    <a data-toggle="tab" href="#tab5">
                                        <div class="testi-img">
                                            <img src="{{ url('main/images/testimonial/5.jpg')}}" class="testi-img" alt="Client Image">
                                        </div>
                                        <h5 class="testi-name">ROBERT SMITH</h5>
                                        <span class="testi-title">PHP NINJA</span>
                                    </a>
                                </li>
                                <li class="col-md-4 col-sm-4 hidden-xs">
                                    <a data-toggle="tab" href="#tab6">
                                        <div class="testi-img">
                                            <img src="{{ url('main/images/testimonial/6.jpg')}}" class="testi-img" alt="Client Image">
                                        </div>
                                        <h5 class="testi-name">Lisa Broom</h5>
                                        <span class="testi-title">UI/UX NINJA</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab4" class="tab-pane animated flipInX in active">
                                    <div class="testi-content">
                                        <p>Quisque quis volutpat ex. Nunc in lacus lectus. Duis sodales in arcu vitae commodo. Proin aliquam viverra dignissim. Nunc viverra lacus id vulputate pharetra. Vivamus bibendum auctor erat, at consequat turpis efficitur nec.</p>
                                    </div>
                                </div>
                                <div id="tab5" class="tab-pane animated flipInX">
                                    <div class="testi-content">
                                        <p>Nunc in lacus lectus. Duis sodales in arcu vitae commodo. Proin aliquam viverra dignissim. Nunc viverra lacus id vulputate pharetra. Vivamus bibendum auctor erat, at consequat turpis efficitur nec. Maecenas vel eros arcu.</p>
                                    </div>
                                </div>
                                <div id="tab6" class="tab-pane animated flipInX">
                                    <div class="testi-content">
                                        <p>Duis sodales in arcu vitae commodo. Proin aliquam viverra dignissim. Nunc viverra lacus id vulputate pharetra. Vivamus bibendum auctor erat, at consequat turpis efficitur nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial Start -->

            <!-- Blog Start -->
            <section id="rs-blog" class="rs-blog pt-100 pb-70">
                <div class="container">

                    <div class="sec-title text-center">
                        <h3>Our Latest Blogs</h3>
                        <p>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,consectetur<br>
                            adipisci velit, sed quia non numquam eius modi
                        </p>
                    </div>

                    <div class="blog-carousel owl-carousel owl-navigation-yes">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ url('main/images/blog/1.jpg')}}" alt="Blog Image">
                                <div class="blog-img-content">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <a class="blog-link" href="blog-details.html" title="Blog Title">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-meta">
                                <div class="blog-date">
                                    22 May 2014
                                </div>
                                <div class="blog-lc">
                                    <div class="like">
                                        <i class="fa fa-heart"></i> 5
                                    </div>
                                    <div class="view">
                                        <i class="fa fa-eye"></i> 3
                                    </div>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <a href="blog-details.html">Business Growth and Maturation</a>
                                <p>At vero eos et accusamus et odio dignissimos ducimus qui blanditiis praesentium del eniti atque corrupti quos dolores.</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ url('main/images/blog/2.jpg')}}" alt="Blog Image">
                                <div class="blog-img-content">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <a class="blog-link" href="blog-details.html" title="Blog Title">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-meta">
                                <div class="blog-date">
                                    17 April 2013
                                </div>
                                <div class="blog-lc">
                                    <div class="like">
                                        <i class="fa fa-heart"></i> 5
                                    </div>
                                    <div class="view">
                                        <i class="fa fa-eye"></i> 3
                                    </div>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <a href="blog-details.html">Company Anual Tour</a>
                                <p>At vero eos et accusamus et odio dignissimos ducimus qui blanditiis praesentium del eniti atque corrupti quos dolores.</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ url('main/images/blog/3.jpg')}}" alt="Blog Image">
                                <div class="blog-img-content">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <a class="blog-link" href="blog-details.html" title="Blog Title">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-meta">
                                <div class="blog-date">
                                    21 March 2015
                                </div>
                                <div class="blog-lc">
                                    <div class="like">
                                        <i class="fa fa-heart"></i> 5
                                    </div>
                                    <div class="view">
                                        <i class="fa fa-eye"></i> 3
                                    </div>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <a href="blog-details.html">Perfect Work Zone</a>
                                <p>At vero eos et accusamus et odio dignissimos ducimus qui blanditiis praesentium del eniti atque corrupti quos dolores.</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ url('main/images/blog/4.jpg')}}" alt="Blog Image">
                                <div class="blog-img-content">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <a class="blog-link" href="blog-details.html" title="Blog Title">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-meta">
                                <div class="blog-date">
                                    25 Jan 2017
                                </div>
                                <div class="blog-lc">
                                    <div class="like">
                                        <i class="fa fa-heart"></i> 5
                                    </div>
                                    <div class="view">
                                        <i class="fa fa-eye"></i> 7
                                    </div>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <a href="blog-details.html">Company Anual Tour</a>
                                <p>At vero eos et accusamus et odio dignissimos ducimus qui blanditiis praesentium del eniti atque corrupti quos dolores.</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ url('main/images/blog/5.jpg')}}" alt="Blog Image">
                                <div class="blog-img-content">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <a class="blog-link" href="blog-details.html" title="Blog Title">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-meta">
                                <div class="blog-date">
                                    15 Aug 2018
                                </div>
                                <div class="blog-lc">
                                    <div class="like">
                                        <i class="fa fa-heart"></i> 7
                                    </div>
                                    <div class="view">
                                        <i class="fa fa-eye"></i> 2
                                    </div>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <a href="blog-details.html">Perfect Work Zone</a>
                                <p>At vero eos et accusamus et odio dignissimos ducimus qui blanditiis praesentium del eniti atque corrupti quos dolores.</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ url('main/images/blog/6.jpg')}}" alt="Blog Image">
                                <div class="blog-img-content">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <a class="blog-link" href="blog-details.html" title="Blog Title">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-meta">
                                <div class="blog-date">
                                    22 Feb 2015
                                </div>
                                <div class="blog-lc">
                                    <div class="like">
                                        <i class="fa fa-heart"></i> 8
                                    </div>
                                    <div class="view">
                                        <i class="fa fa-eye"></i> 6
                                    </div>
                                </div>
                            </div>
                            <div class="blog-desc">
                                <a href="blog-details.html">Advertising Campaigns</a>
                                <p>At vero eos et accusamus et odio dignissimos ducimus qui blanditiis praesentium del eniti atque corrupti quos dolores.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog End -->

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
    
@endsection


