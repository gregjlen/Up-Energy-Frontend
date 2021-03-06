<?php

$app_root = './includes';
include "$app_root/app/header.inc.php";


?>

    <section class="map map-3" >
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="d-none">Contact</h3>
                </div>
            </div>
        </div>
        <iframe src="https://maps.google.com/maps?q=rue bossuet lyon&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near" width="600" height="250" style="border:0; #zoom{display: none;}!important;"></iframe>
    </section>

    <section class="testimonial testimonial-5 bg-overlay bg-overlay-white2">
        <div class="bg-section"><img src="assets/images/background/wavy-pattern.png" alt="background"/></div>
        <div class="container">
            <div class="contact-panel contact-panel-2">
                <div class="row">
                    <div class="col-12 col-lg-5 img-card-holder">
                        <div class="img-card img-card-2" style="background: rgb(128,225,242);
background: -moz-linear-gradient(164deg, rgba(128,225,242,1) 0%, rgba(178,221,201,1) 100%);
background: -webkit-linear-gradient(164deg, rgba(128,225,242,1) 0%, rgba(178,221,201,1) 100%);
background: linear-gradient(164deg, rgba(128,225,242,1) 0%, rgba(178,221,201,1) 100%);">
                            <div class="card-content">
                                <div class="content-top">
                                    <p>Nous sommes disponible pour répondre à vos question et construire ensemble votre futur projet de rénnovation.</p><br>
                                    <p>Réponse sous 48h par mail ou téléphone.</p>
                                </div>
                                <div class="content-bottom">
                                    <ul class="list-unstyled contact-infos">
                                        <li class="contact-info"><i class="energia-phone-Icon"></i>
                                            <p>Téléphone: <a href="tel:123-456-7890">04 65 84 64 74</a></p>
                                        </li>
                                        <li class="contact-info"><i class="energia-location-Icon"></i>
                                            <p>Adresse: <a href="mailto:info@energia.com">132 Rue bossuet - 69006 Lyon		</a></p>
                                        </li>
                                        <li class="contact-info"><i class="energia-email--icon"></i>
                                            <p>Email: <a href="mailto:info@energia.com">contact@up-energy.fr		</a></p>
                                        </li>
                                        <li class="contact-info"><i class="energia-clock-Icon"></i>
                                            <p>Lundi - Vendredi : 9h - 19h</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="contact-card">
                            <div class="contact-body">
                                <h5 class="card-heading">Contactez-nous</h5>
                                <p class="card-desc">Notre équipe commerciale reviens vers vous sous 24h.</p>
                                <form class="contactForm" method="post" action="assets/php/contact.php">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <input class="form-control" type="text" id="contact-name" name="contact-name" placeholder="Nom" required=""/>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <input class="form-control" type="text" id="contact-email" name="contact-email" placeholder="Email" required=""/>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <input class="form-control" type="text" id="contact-phone" name="contact-phone" placeholder="Téléphone" required=""/>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <select class="form-control" id="select-1">
                                                <option value="default">Selectionnez un projet</option>
                                                <option value="s1">Chauffage</option>
                                                <option value="s2">Isolation</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control" id="contact-infos" placeholder="informations complémentaires" name="contact-infos" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="row">

                                            <div class="col-12 mt-3"><i>Vous pouvez vous inscrire gratuitement sur la liste d’opposition au démarchage téléphonique, dans le cadre du dispositif Bloctel : <a href="https://www.bloctel.gouv.fr" target="_blank">www.bloctel.gouv.fr</a></i></div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn--secondary mt-3">Envoyer<i class="energia-arrow-right"></i></button>
                                        </div>
                                        <div class="col-12">
                                            <div class="contact-result"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End .contact-body -->
                        </div>
                    </div>
                </div>
                <!-- End .row-->
            </div>

        </div>
        <!-- End .container-->
    </section>

<?php
include "$app_root/app/footer.inc.php";
?>