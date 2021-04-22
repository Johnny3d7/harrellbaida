<div class="col-sm-9">
    <div class="main-menu">
        <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
        <nav class="rs-menu">
            <ul class="nav-menu">
                <!-- Home -->
                <li class="current-menu-item current_page_item menu-item-has-children">
                    <a href="{{ route('home') }}">Accueil</a>
                </li>
                 <!-- End Home -->
                <li class="menu-item-has-children"><a href="{{ route('presentation') }}">Qui sommes nous</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('presentation') }}">Présentation</a></li>
                        <li><a href="{{ route('valeurs-ethique') }}">Valeurs & Ethique</a></li>
                    </ul>
                </li>                                        
                <li class="menu-item-has-children"><a href="{{ route('services') }}">Services</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('services') }}">Service 1</a></li>
                        <li><a href="{{ route('services') }}">Service 2</a></li>
                        <li><a href="{{ route('services') }}">Service 3</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Galerie</a>
                    {{-- <ul class="sub-menu">
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                    </ul> --}}
                </li>
                {{-- <li class="menu-item-has-children"><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li class="menu-item-has-children">
                          <a href="#">Team</a>
                          <ul class="sub-menu">
                             <li><a href="team.html">Team</a></li>
                             <li><a href="team-details.html">Team Details</a></li>
                          </ul>
                       </li>
                        <li class="menu-item-has-children">
                          <a href="#">Shop</a>
                          <ul class="sub-menu">
                             <li><a href="shop.html">Shop</a></li>
                             <li><a href="shop-single.html">Shop Single</a></li>
                          </ul>
                       </li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="error-404.html">Error Page</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                        <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="testimonial.html">Testimonial</a></li> --}}
                
                <li> <a href="{{ route('contact') }}">Contact</a> </li>
            </ul>
       </nav>
   </div>
</div>