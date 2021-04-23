@extends('main.partials.otherlayout')

@section('stylesheets')
    
@endsection

@section('page-title')
Galerie  
@endsection

@section('sub-content')
<!-- Portfolio Start -->
<section id="rs-portfolio" class="rs-portfolio portfolio-pages pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6 mb-30">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="{{ url('main/images/portfolio/1.jpg') }}" alt="Portfolio Image"/>
                    </div>
                    <div class="portfolio-content">
                         <div class="border-overly"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <!-- zoom btn -->
                                <a class="image-popup p-zoom" href="{{ url('main/images/portfolio/1.jpg') }}" title="Project Title">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <!-- view btn -->
                                <a class="btn-view" href="#">
                                    <i class="fa fa-paper-plane"></i>
                                </a>

                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 mb-30">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="{{ url('main/images/portfolio/2.jpg') }}" alt="Portfolio Image" />
                    </div>
                    <div class="portfolio-content">
                         <div class="border-overly"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <a class="image-popup p-zoom" href="{{ url('main/images/portfolio/2.jpg') }}" title="Project Title">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <a class="btn-view" href="#">
                                    <i class="fa fa-paper-plane"></i>
                                </a>

                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                <p class="p-desc">Lorem Ipsum is not simply random text</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 mb-30">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="{{ url('main/images/portfolio/3.jpg') }}" alt="Portfolio Image" />
                    </div>
                    <div class="portfolio-content">
                        <div class="border-overly"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <a class="image-popup p-zoom" href="{{ url('main/images/portfolio/3.jpg') }}" title="Project Title">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <a class="btn-view" href="#">
                                    <i class="fa fa-paper-plane"></i>
                                </a>

                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                <p class="p-desc">Lorem Ipsum is not simply random text</p>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 mb-30">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="{{ url('main/images/portfolio/4.jpg') }}" alt="Portfolio Image" />
                    </div>
                    <div class="portfolio-content">
                         <div class="border-overly"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <a class="image-popup p-zoom" href="{{ url('main/images/portfolio/4.jpg') }}" title="Project Title">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <a class="btn-view" href="#">
                                    <i class="fa fa-paper-plane"></i>
                                </a>

                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 mb-30">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="{{ url('main/images/portfolio/5.jpg') }}" alt="Portfolio Image" />
                    </div>
                    <div class="portfolio-content">
                         <div class="border-overly"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <a class="image-popup p-zoom" href="{{ url('main/images/portfolio/4.jpg') }}" title="Project Title">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <a class="btn-view" href="#">
                                    <i class="fa fa-paper-plane"></i>
                                </a>

                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 mb-30">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="{{ url('main/images/portfolio/6.jpg') }}" alt="Portfolio Image" />
                    </div>
                    <div class="portfolio-content">
                         <div class="border-overly"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <a class="image-popup p-zoom" href="{{ url('main/images/portfolio/5.jpg') }}" title="Project Title">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <a class="btn-view" href="#">
                                    <i class="fa fa-paper-plane"></i>
                                </a>

                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 mb-30">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="{{ url('main/images/portfolio/7.jpg') }}" alt="Portfolio Image" />
                    </div>
                    <div class="portfolio-content">
                         <div class="border-overly"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <a class="image-popup p-zoom" href="{{ url('main/images/portfolio/5.jpg') }}" title="Project Title">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <a class="btn-view" href="#">
                                    <i class="fa fa-paper-plane"></i>
                                </a>

                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 mb-30">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="{{ url('main/images/portfolio/8.jpg') }}" alt="Portfolio Image" />
                    </div>
                    <div class="portfolio-content">
                         <div class="border-overly"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <a class="image-popup p-zoom" href="{{ url('main/images/portfolio/5.jpg') }}" title="Project Title">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <a class="btn-view" href="#">
                                    <i class="fa fa-paper-plane"></i>
                                </a>

                                <h4 class="p-title"><a href="portfolio-details.html">Project Name</a></h4>
                                <p class="p-desc">Lorem Ipsum is not simply random text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 mb-30">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="{{ url('main/images/portfolio/9.jpg') }}" alt="Portfolio Image" />
                    </div>
                    <div class="portfolio-content">
                        <div class="border-overly"></div>
                        <div class="display-table">
                            <div class="display-table-cell">
                                <a class="image-popup p-zoom" href="{{ url('main/images/portfolio/6.jpg') }}" title="Project Title">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <a class="btn-view" href="#">
                                    <i class="fa fa-paper-plane"></i>
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
</section>
<!-- Portfolio End -->
@endsection

@section('javascript')
    
@endsection