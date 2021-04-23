<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>404 - Baida Engineering - Hydraulique</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="{{ url('main/apple-touch-icon.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('main/images/fav.png') }}">
        <!-- bootstrap v3.3.7 css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/css/bootstrap.min.css ') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/css/font-awesome.min.css ') }}">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/fonts/flaticon.css ') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/style.css ') }}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ url('main/css/responsive.css ') }}">
    </head>
    <body> 
 
        <!-- Erro 404 Page Start Here -->
        <div class="rs-error-page">
            <div class="error-part">
                <div class="error-text">
                    <div class="error-logo">
                        <img src="{{ url('main/images/baida/logo.png') }}" style="height: 180px; width:auto;" alt="">
                    </div>
                    <h1 class="error-code">404</h1>
                    <p class="error-message">La page est introuvable.</p>
                    <a href="{{ route('home') }}" title="Accueil"><i class="fa fa-chevron-left"></i> Retour à la page d'accueil</a>
                </div>
            </div>
        </div>
        <!-- Erro 404 Page End Here -->  

        <!-- modernizr js -->
        <script src="{{ url('main/js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ url('main/js/jquery.min.js') }}"></script>
        <!-- bootstrap js -->
        <script src="{{ url('main/js/bootstrap.min.js') }}"></script>
        <!-- plugins js -->
        <script src="{{ url('main/js/plugins.js') }}"></script>
    </body>
</html>