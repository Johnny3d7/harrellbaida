@extends('main.partials.otherlayout')

@section('child_stylesheets')


    .rs-breadcrumbs.sec-spacer{
        background-image: url(images/baida/v5.jpg);
    }


@endsection

@section('page-title')
Contact
@endsection

@section('sub-content')
 <!-- map -->
 <div id="g-map" class="g-map"></div>
 <!-- map end -->

 <!-- Contact Start -->
 <section id="rs-contact" class="rs-contact gray-color pb-100">
     <div class="container">
         <div class="row">
             <div class="contact-bg">
                 <div class="margin col-md-5">
                     <div class="contact-address">
                         <div class="contact-address-title">
                             <p class="contact-title">Contact</p>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporo incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                         </div>
                         <div class="address-item">
                             <div class="address-icon">
                                 <i class="fa fa-phone"></i>
                             </div>
                             <div class="address-text">
                                 +225 27 23 59 61 99<br>
                                 +225 07 08 45 57 63
                             </div>
                         </div>
                         <div class="address-item">
                             <div class="address-icon">
                                 <i class="fa fa-envelope-open-o"></i>
                             </div>
                             <div class="address-text">
                                 ballobih@yahoo.fr <br>
                                 04 BP 1774 ABIDJAN 04
                             </div>
                         </div>
                         <div class="address-item">
                             <div class="address-icon">
                                 <i class="fa fa-map-marker"></i>
                             </div>
                             <div class="address-text">
                                 Abidjan - Cocody <br>
                                 Riviera 3 - COPRACI
                             </div>
                         </div>
                         <div class="social-icon-bottom">
                             <ul>
                                 <li>
                                     <a href="#"><i class="fa fa-facebook-f"></i></a>
                                 </li>
                                 <li>
                                     <a href="#"><i class="fa fa-twitter"></i></a>
                                 </li>
                                 <li>
                                     <a href="#"><i class="fa fa-google-plus"></i></a>
                                 </li>
                                 <li>
                                     <a href="#"><i class="fa fa-pinterest"></i></a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="margin col-md-7">
                     <div class="contact-form">
                         <div class="contact-form-title">
                             <p class="contact-title">Nous écrire</p>
                         </div>
                         <div id="form-messages"></div>
                         <form id="contact-form" method="post" action="mailer.php">
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-field">
                                         <i class="fa fa-address-book-o"></i>
                                         <input type="text" placeholder="Nom" id="name" name="name" required>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-field">
                                         <i class="fa fa-envelope-o"></i>
                                         <input type="email" placeholder="E-Mail" id="email" name="email" required>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-field">
                                         <i class="fa fa-phone"></i>
                                         <input type="text" placeholder="Numéro de téléphone" id="phone_number" name="phone_number" required>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-field">
                                         <i class="fa fa-map-marker"></i>
                                         <input type="text" placeholder="Ville ou quartier" id="website" name="website" required="false">
                                     </div>
                                 </div>
                             </div>
                             <div class="form-field">
                                 <textarea placeholder="Écrivez votre message" rows="7" id="message" name="message" required></textarea>
                             </div>
                             <div class="form-button">
                                 <button type="submit" class="readon">Envoyez</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Contact End -->
@endsection

@section('javascript')

@endsection
