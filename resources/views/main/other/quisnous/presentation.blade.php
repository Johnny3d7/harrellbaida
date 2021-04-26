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
                        <h4>Welcome To bStart</h4>
                        <h3>World Best Consulting Agency</h3>
                    </div>
                    <p class="about-desc">Suspendisse ex neque, sollicitudin in velit eu, luctus gravida nunc. Nulla pul-vinar risus sed metus euismod sodales ut sed nisi. Nulla posuere suscipit finibus. Quisque place vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor lacus egestas. Nunc erat libero. Free online Lorem Ipsum dummy neque porro quisquam est. It uses a dictionary of over 200 Latin words, combined with a handful of model.</p>
                    <p class="about-desc">Suspendisse ex neque, sollicitudin in velit eu, luctus gravida nunc. Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor lacus egestas. Dummy text generator with great features. Online Lorem Ipsum dummy neque porro quisquam est. It uses a dictionary of over 200 Latin words, combined.</p>
                </div>
                <div class="col-md-5 mpt-20">
                    <!-- panel start -->
                    <div class="panel-group mb-0" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Our History</a>
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
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Our Mission</a>
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
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Our Vision</a>
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
                        <img src="images/service/6.jpg" alt="Service Image" />
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mpt-40">
                    <div class="sec-title">
                        <h4>Our Responsibilities</h4>
                        <h3>We Always Careful</h3>
                    </div>

                    <div class="services-item">
                        <div class="service-mid-icon">
                            <a href="#"><span class="service-mid-icon-container"><i data-icon="7" class="icon"></i></span></a>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title"><a href="services-details.html">Focus on Best Quality</a></h4>
                            <p>Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor lacus egestas.</p>
                        </div>
                    </div>
                    <div class="services-item">
                        <div class="service-mid-icon">
                            <a href="#"><span class="service-mid-icon-container"><i data-icon="C" class="icon"></i></span></a>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title"><a href="services-details.html">Focus on Good Relation</a></h4>
                            <p>Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor lacus egestas.</p>
                        </div>
                    </div>
                    <div class="services-item">
                        <div class="service-mid-icon">
                            <a href="#"><span class="service-mid-icon-container"><i data-icon="&#xe00a;" class="icon"></i></span></a>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title"><a href="services-details.html">Focus on Abilities</a></h4>
                            <p>Quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor lacus egestas.</p>
                        </div>
                    </div>
                    <div class="services-item">
                        <div class="service-mid-icon left">
                            <a href="#"><span class="service-mid-icon-container"><i data-icon=">" class="icon"></i></span></a>
                        </div>
                        <div class="services-desc">
                            <h4 class="services-title"><a href="services-details.html">SEO Services</a></h4>
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


@endsection

@section('javascript')

@endsection
