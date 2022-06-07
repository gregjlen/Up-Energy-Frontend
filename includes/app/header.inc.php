<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Ayman Fikry"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Multi-purpose energy html5 template"/>
    <title>Up-energy.fr</title>
    <link href="assets/images/favicon/favicon.png" rel="icon"/>
    <!--  Fonts ==
    -->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet"/>
    <!--  Stylesheets==
    -->
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <link href="assets/css/vendor.min.css" rel="stylesheet"/>
    <link href="assets/css/style.css?v=1.4.1" rel="stylesheet"/>

</head>
<body>

<!-- Document Wrapper-->
<div class="wrapper clearfix" id="wrapperParallax">

    <header class="header header-light header-topbar header-topbar1 header-shadow" id="navbar-spy">

        <div class="top-bar">
            <div class="block-left">
                <div class="top-contact">
                    <div class="contact-infos"><i class="energia-phone-Icon"></i>
                        <div class="contact-body text-center">
                            <p>Téléphone: <a href="tel:123-456-7890">04 65 84 64 74</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-right">
                <!-- Start .social-links-->
                <div class="social-links"><a class="share-facebook" href="javascript:void(0)"><i class="energia-facebook"></i></a><a class="share-instagram" href="javascript:void(0)"><i class="energia-twitter"></i></a><a class="share-twitter" href="javascript:void(0)"><i class="energia-youtube"></i></a></div>

            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-sticky" id="primary-menu"><a class="navbar-brand" href="index.php"><img class="logo logo-dark" src="assets/images/logo/v3.png" height="120" alt="Energia Logo"/><img class="logo logo-mobile" src="assets/images/logo/logo-mobile.png" alt="Energia Logo"/></a>
            <div class="module-holder module-holder-phone">

            </div>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto">

                    <li class="nav-item" data-hover=""><a href="index.php"><span>Accueil</span></a></li>
                    <li class="nav-item has-dropdown" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span style="text-transform: none;">Nos produits</span></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="pac.php"><span>Pompe a chaleur Air / Eau</span></a></li>
                            <li class="nav-item"><a href="vmc.php"><span>VMC Double flux</span></a></li>

                            <li class="nav-item"><a href="chaudiere-bio-masse.php"><span>Chaudière BioMasse a granule</span></a></li>
                            <li class="nav-item"><a href="ballon-thermodynamique.php"><span>Ballon thermodynamique</span></a></li>
                            <li class="nav-item"><a href="chauffe-eau-solaire.php"><span>Chauffe eau solaire thermique</span></a></li>
                            <li class="nav-item"><a href=""><span>Isolation comble perdus</span></a></li>
                            <li class="nav-item"><a href=""><span>Isolation planchers bas</span></a></li>
                            <li class="nav-item"><a href=""><span>Isolation des murs par l’extérieur</span></a></li>

                        </ul>
                    </li>
                    <li class="nav-item" data-hover=""><a href=""><span style="text-transform: none;">Calculer mes aides</span></a></li>
                    <li class="nav-item" data-hover=""><a href="blog.php"><span>Blog</span></a></li>
                    <li class="nav-item" data-hover=""><a href="a-propos.php"><span style="text-transform: none;">A propos</span></a></li>
                    <li class="nav-item" data-hover=""><a href="contact.php"><span>Contact</span></a></li>
                    <?php

                    if (isset($_GET['debug'])){
                        ?>
                        <li class="nav-item has-dropdown" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span style="color: green;">DEBUG - Landing</span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href=""><span style="color : red;">Pompe a chaleur Air / Eau</span></a></li>
                                <li class="nav-item"><a href=""><span style="color : red;">VMC Double flux</span></a></li>
                                <li class="nav-item"><a href="landing-bm.php"><span>Chaudière BioMasse a granule</span></a></li>
                                <li class="nav-item"><a href=""><span style="color : red;">Ballon thermodynamique</span></a></li>
                                <li class="nav-item"><a href=""><span style="color : red;">Chauffe eau solaire thermique</span></a></li>
                                <li class="nav-item"><a href=""><span style="color : red;">Isolation comble perdus</span></a></li>
                                <li class="nav-item"><a href=""><span style="color : red;">Isolation planchers bas</span></a></li>
                                <li class="nav-item"><a href=""><span style="color : red;">Isolation des murs par l’extérieur</span></a></li>
                            </ul>
                        </li>
                        <?php
                    }

                    ?>
                </ul>
                <div class="module-holder">


                </div>
                <!--  End .module-holder-->
            </div>
            <!--  End .navbar-collapse-->
        </nav>
        <!--  End .navbar-->
    </header>