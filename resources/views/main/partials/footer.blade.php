<footer id="rs-footer" class="rs-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="about-widget">
                        <img src="{{ url('main/images/baida/logoblanc.png')}}" style="height: 120px;width:auto;" alt="Footer Logo">
                        <p>"" Le développement durable et le changement climatique sont de côté de la même pièce "". <br><strong>BAN KI-MOON</strong></p>
                        <ul class="footer-address">
                            <li><i class="fa fa-phone"></i><a href="#">+2250708455763</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="#">ballobih@yahoo.fr</a></li>
                            <li><i class="fa fa-dribbble"></i><a href="#">www.example.com</a></li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-md-3">
                    <h5 class="footer-title">RECENT POSTS</h5>
                    <div class="recent-post-widget">
                        <div class="post-item">
                            <div class="post-date">
                                <span>28</span>
                                <span>June</span>
                            </div>
                            <div class="post-desc">
                                <h5 class="post-title"><a href="#">Welcome to Responsive Theme</a></h5>
                                <span class="post-category">Design</span>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="post-date">
                                <span>28</span>
                                <span>June</span>
                            </div>
                            <div class="post-desc">
                                <h5 class="post-title"><a href="#">Welcome to Responsive Theme</a></h5>
                                <span class="post-category">Design</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-4">
                    <h5 class="footer-title">Liens utiles</h5>
                    <ul class="sitemap-widget">
                        <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}"><a href="{{ route('home') }}">Accueil</a></li>
                        <li class="{{ (request()->segment(1) == 'qui-sommes-nous') ? 'active' : '' }}"><a href="{{ route('presentation') }}">Présentation</a></li>
                        <li class="{{ (request()->segment(1) == 'galerie') ? 'active' : '' }}"><a href="{{ route('galerie') }}">Galerie</a></li>
                        <li class="{{ (request()->segment(1) == 'services') ? 'active' : '' }}"><a href="{{ route('services') }}">Services</a></li>
                        <li class="{{ (request()->segment(1) == 'contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact </a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="footer-title">Newsletter</h5>
                    <!-- Newsletter Start -->
                    <div class="news-info">
                        <p class="news-note white-color">Inscrivez-vous si vous voulez recevoir les informations de nos dernières activités</p>
                    </div>
                    <form class="news-form footer-form">
                        <input type="text" class="form-input" placeholder="Entrez votre email">
                        <button type="submit" class="form-button">
                            Envoyez
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="copyright">
                        <p>&copy; 2021 <a href="#">Baida Engineering</a>. Tous droits réservés.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="text-right ft-bottom-right">
                        <div class="footer-bottom-share">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
