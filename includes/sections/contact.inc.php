<section class="contact contact-1 bg-overlay bg-overlay-theme" id="contact-1" style="background-color: #2b3e4b;">
    <div class="container">
        <div class="contact-panel contact-panel-3">
            <div class="heading heading-light heading-6">
                <h2 class="heading-title">On prend contact avec vous !</h2>
                <p class="heading-desc">
                    Ce formulaire nous permet de calculer les aides et de saisir au mieux vos besoins pour votre futur projet.
                </p>
                <div class="advantages-list-holder">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <ul class="list-unstyled advantages-list advantages-list-2">
                                <li>Calcul de vos aides</li>
                                <li>Préparation du dossier</li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-6">
                            <ul class="list-unstyled advantages-list advantages-list-2">
                                <li>Proposition de solution</li>
                                <li>Accompagnement</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="contact-quote"> <img src="assets/images/icons/noteicon.png" alt="icon"/>
                    <p>Vous voulez parler directement avec un de nos commerciaux de vos travaux et de votre projet ?
                        Appelez nous ! <a href="tel:01061245741">07 67 96 40 61</a></p>
                </div>
            </div>
            <div class="contact-card">
                <div class="contact-body">
                    <h5 class="card-heading">Prise de contact</h5>
                    <p class="card-desc">
                        Ce formulaire nous permet de saisir au mieux vos besoins pour vous proposer ensuite des solutions
                        adaptées.
                    </p>
                    <form class="contactForm" method="post" action="assets/php/contact.php">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="select-1">Type de chauffage</label>
                                <select class="form-control" id="select-1">
                                    <option value="default">Fuel</option>
                                    <option value="AL">Je sais pas </option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="select-2">Êtes vous propriétaire ?</label>
                                <select class="form-control" id="select-2">
                                    <option value="default">Oui</option>
                                    <option value="AL">Non</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="contact-usage">Nom, Prénom</label>
                                <input class="form-control" type="text" id="contact-usage" name="contact-usage" placeholder="1254 KWH" required=""/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="select-3">Age de la maison</label>
                                <select class="form-control" id="select-3">
                                    <option value="default">1 - 5 ans</option>
                                    <option value="AL">5 - 10 ans</option>
                                    <option value="AL">15 - 25 ans</option>
                                    <option value="AL">+ 25 ans</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">J'accepte les</label>
                                <div class="custom-radio-group" id="custom-radio-group">
                                    <div class="custom-control">
                                        <input class="custom-control-input" type="radio" id="customRadioInline1" name="customRadioInline1"/>
                                        <label for="customRadioInline1"><a href="">CGU</a></label>
                                    </div>
                                    <div class="custom-control">
                                        <input class="custom-control-input" type="radio" id="customRadioInline2" name="customRadioInline1"/>
                                        <label for="customRadioInline1"><a href="">CGV</a></label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn--secondary w-100">Envoyer ma demande <i class="energia-arrow-right"></i></button>
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
        <!-- End .contact-panel-->
    </div>
    <!-- End .container-->
</section>