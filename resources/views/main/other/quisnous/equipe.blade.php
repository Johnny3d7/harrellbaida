@extends('main.partials.otherlayout')

@section('stylesheets')
    
@endsection

@section('page-title')
Notre équipe  
@endsection

@section('sub-content')
<!-- Leadership Section Start -->
<div class="leadership-section pt-100 pb-70">
    <div class="container">
        <div class="sec-title text-center">
            <h3>Notre équipe</h3>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur<br>
                adipisci velit, sed quia non numquam eius modi
            </p>                     
        </div>
    </div>
    <div class="container">
         <div class="row grid-style-13">
            <div class="col-md-6">
                <div class="single-team-member">
                    <div class="image-section">
                        <img src="{{ url('main/images/leadership/1.jpg') }}" alt="">
                        <div class="overlay-section">
                            <div class="detail-link">
                                  <a href="team-details.html"><i class="fa fa-link"></i></a>
                              </div>
                        </div>
                    </div>
                    <div class="box-section">
                        <div class="box-text">
                            <div class="box-title">
                                <h4><a href="team-details.html">Stuard Bloom</a></h4>
                                <h5>Executive Vice President</h5>
                            </div>				    				
                            <div class="social-icons"> 
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> 
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> 
                                <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-team-member">
                    <div class="image-section">
                        <img src="{{ url('main/images/leadership/2.jpg') }}" alt="">
                        <div class="overlay-section">	
                            <div class="detail-link">
                                  <a href="team-details.html"><i class="fa fa-link"></i></a>
                              </div>
                        </div>
                    </div>
                    <div class="box-section">
                        <div class="box-text">
                            <div class="box-title">
                                <h4><a href="team-details.html">Peter Thugs</a></h4>
                                <h5>Chief Financial Officer</h5>
                            </div>				    				
                            <div class="social-icons"> 
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> 
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> 
                                <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-team-member">
                    <div class="image-section">
                        <img src="{{ url('main/images/leadership/3.jpg') }}" alt="">
                        <div class="overlay-section">	
                            <div class="detail-link">
                                  <a href="team-details.html"><i class="fa fa-link"></i></a>
                              </div>
                        </div>
                    </div>
                    <div class="box-section">
                        <div class="box-text">
                            <div class="box-title">
                                <h4><a href="team-details.html">Stefen Glory</a></h4>
                                <h5>Chief Information Officer</h5>
                            </div>				    				
                            <div class="social-icons"> 
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> 
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> 
                                <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-team-member">
                    <div class="image-section">
                        <img src="{{ url('main/images/leadership/4.jpg') }}" alt="">
                        <div class="overlay-section">	
                            <div class="detail-link">
                                  <a href="team-details.html"><i class="fa fa-link"></i></a>
                              </div>
                        </div>
                    </div>
                    <div class="box-section">
                        <div class="box-text">
                            <div class="box-title">
                                <h4><a href="team-details.html">William Johnson</a></h4>
                                <h5>Chairman & CEO</h5>
                            </div>				    				
                            <div class="social-icons"> 
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> 
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> 
                                <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Leadership Section End -->
@endsection

@section('javascript')
    
@endsection