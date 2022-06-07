<?php

$app_root = './includes';
include "$app_root/app/header.inc.php";

?>

      <section class="page-title page-title-11" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
          <div class="bg-section"><img src="https://static-cdn.ateros.fr/file/ateros/zEVJX3n8YGbG1cTHV4efV0UQ0LJohhsyLuZ1a6Rr.png" alt="Background"/></div>
          <div class="container">
            <div class="title">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <h1 class="title-heading">VMC Double Flux</h1>
                </div>
              </div>
              <div class="row"> 
                <div class="col-12 col-lg-5">
                  <p class="title-desc">
                      La ventilation mécanique contrôlée double flux
                  </p>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="breadcrumb-wrap">
                  <ol class="breadcrumb breadcrumb-light d-flex">
                    <li class="breadcrumb-item"><a href="index.html">Nos produits</a></li>
                    <li class="breadcrumb-item active" aria-current="page">VMC Double Flux</li>
                  </ol>
                </div>
              </div>
            </div>
            <!-- End .row-->
          </div>
        </div>
        <!-- End .container-->
      </section>
      <!-- End #page-title -->
      <!--
      ============================
      Services Single Section
      ============================
      -->
      <section class="service-single" id="service-single">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-4 order-1">
              <!-- 
              ============================
              Services Sidebar
              ============================
              -->
            <?php include "$app_root/sections/sidebar.inc.php"; ?>
              <!-- End .sidebar-->
            </div>
            <div class="col-12 col-lg-8 order-0 order-lg-2">
              <!-- Start .service-entry-->
              <div class="service-entry">
                <div class="entry-content">
                  <div class="entry-introduction entry-infos">
                    <h5 class="entry-heading">Une VMC c'est quoi?</h5>
                    <p class="entry-desc">

                        Le système permet par le biais d'un échangeur (bloc sous le toit) de récupérer la chaleur de l'air extrait (en orange) pour la transférer à
                        l'air soufflé (en bleu puis vert). Il n'y a pas de mélange entre l'air extrait et l'air soufflé, il n'y a qu'un échange de chaleur. L'air
                        est extrait dans les pièces dites de service : cuisine, salle de bain, wc, cellier... Bref, toutes les pièces disposant d'un point d'eau.
                        L'air est soufflé dans les pièces dites principales : salon, salle à manger, bureau, chambre...

                        <br><br>

                        À noter que le caisson doit obligatoirement se trouver en volume isolé (pas d'installation en combles perdus isolés avec de la laine déroulée
                        sur le plancher par exemple). De plus, toutes les gaines qui passent en volume non isolé doivent être calorifugées, pour éviter l'apparition
                        de condensation qui serait dangereux pour la santé des occupants. Le module doit également rester accessible pour que l'entretien puisse être
                        réalisé régulièrement.

                    </p>

                  </div>
                  <div class="entry-stats entry-infos">
                    <h5 class="entry-heading">Fonctionnement </h5>
                    <div class="row">
                      <div class="col-12 col-lg-6">


                          <p class="entry-desc">

                              Le principe est la combinaison d'une VMC double flux et d'une pompe à chaleur. Au-lieu de capter les calories de l'air extérieur, la PAC va ici capter l'énergie contenue dans l'air extrait. Elle la transmettra ensuite à l'air neuf qui sera soufflé. Cela permet d'avoir une température constante pour la PAC et ainsi de meilleures performances (COP de 3 en moyenne). A noter que l'on peut avoir un recyclage d'une partie de l'air, notamment pour avoir un débit d'air plus important. Dans la majorité des cas, le système peut-être réversible, c'est-à-dire qu'il peut climatiser.
                              <br><br>

                          </p>
                      </div>
                      <div class="col-12 col-lg-5"> <img class="entry-chart" src="https://static-cdn.ateros.fr/file/ateros/cV8gr5CeBW1dDd1M4iF7tubQGghjvp0vfJhvzOhe.jpg" alt="Chart image"/></div>
                    </div>
                  </div>

                    <iframe frameborder="0" style="height:100vh;width:100vh;border:none; margin-left: -45px;" src='https://forms.zohopublic.eu/davylaurent/form/UnprojetdeVMC/formperma/twj69KER4SGjnbymE5NFmZt8saxRHLun_fWb0rnzY68'></iframe>
                </div>
              </div>
              <!-- End .service-entry-->
            </div>
            <!-- End .col-lg-8-->
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>

    <?php


include "$app_root/app/footer.inc.php";

?>

