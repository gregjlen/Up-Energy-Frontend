<?php

echo "debug: 
<a href='index.php?id=1'>Test 1 </a> / 
<a href='index.php?id=2'>Test 2 </a> / 
<a href='index.php?id=3'>Test 3 </a> / 
<a href='index.php?id=4'>Test 4 </a> / 
<a href='index.php?id=5'>Test 5 </a> / 
";
?>
<?php

$app_root = './includes';
include "$app_root/app/header.inc.php";


?>

<style>

    .u1{
        background-color: white;
    }

</style>


    <section class="slider slider-2">
        <div class="container-fluid pe-0 ps-0">
            <div class="slider-carousel owl-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="800">
                <!--

                https://static-cdn.ateros.fr/file/ateros/3LshswQIoWt5U1eeZB525fT4fKKuEQY5VmtHZ85T.png

                -->

                <div class="slide bg-overlay">
                    <div class="bg-section"><img src="<?= $_GET['id']; ?>.jpg" alt="Background"/></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="slide-content text-center">
                                    <h1 class="slide-headline text-white">Aujourd'hui,<br> l'énergie de demain.</h1>
                                    <p class="slide-desc text-white">
                                        Une solution énergétique adaptée à vos besoins.
                                    </p>
                                </div>
                                <!-- End .slide-content -->
                            </div>
                        </div>
                        <!--  End .row-->
                    </div>
                    <!-- End .container-->
                </div>
                <!-- End .slide-->
                <!--  Start .slide-->
                <!-- End .slide-->
            </div>
            <!-- End .slider-carousel-->
        </div>
        <!--  End .container-fluid-->
    </section>
    <!--
    ============================
    FeaturesBar #1 Section
    ============================
    -->

<style>

    .scp:hover {
        background-image: -webkit-gradient(linear, left top, left bottom, from(#6fa9d0), color-stop(86%, #9bc7b3));
        background-image: -o-linear-gradient(top, #6fa9d0 0%, #9bc7b3 86%);
        background-image: linear-gradient(180deg, #6fa9d0 0%, #9bc7b3 86%);

    }

</style>
    <section class="features-bar bg-overlay bg-overlay-theme3" id="featuresBar-1">
        <div class="container">
            <div class="row g-0 features-holder">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 scp">
                    <!-- Start .feature-panel-->
                    <div class="feature-panel">
                        <div class="feature-content">
                            <a href="">
                            <img src="https://static-cdn.ateros.fr/file/ateros/FyD9XWRo5SWeVdyQQGf1KlSgOvGFv55dsmaYuFFy.png" width="64">
                            <br><br>
                            <h5>Isoler ma maison</h5>
                            </a>
                        </div>
                    </div>
                    <!-- End .feature-panel-->
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 scp">
                    <!-- Start .feature-panel-->
                    <div class="feature-panel">
                        <div class="feature-content">
                            <a href="">
                            <img src="https://static-cdn.ateros.fr/file/ateros/p0ZKsi4gP0rEDefvcFSd43pwjvf6ZPKGX4mVpEVM.png" width="64">
                            <br><br>
                            <h5>Changer mon chauffage</h5>
                            </a>
                        </div>
                    </div>
                    <!-- End .feature-panel-->
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 scp">
                    <!-- Start .feature-panel-->
                    <div class="feature-panel">
                        <div class="feature-content">
                            <a href="calculateur.php">
                            <img src="https://static-cdn.ateros.fr/file/ateros/vNRz5pxASKvdgLePKSFL34Zibyz7bCYTWMeuANQ4.png" width="64">
                            <br><br>
                            <h5>Calculer mes aides</h5>
                            </a>
                        </div>
                    </div>
                    <!-- End .feature-panel-->
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 scp">
                    <!-- Start .feature-panel-->
                    <div class="feature-panel">
                        <div class="feature-content">
                            <a href="contact.php">
                            <img src="https://static-cdn.ateros.fr/file/ateros/Z20xchKPIjSrK0LvbCqhp14lChN2UlxjTVxlywc0.png" width="64">
                            <br><br>
                            <h5>Parler à un expert</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php

include "$app_root/sections/about.inc.php";
include "$app_root/sections/features.inc.php";
include "$app_root/sections/blog.inc.php";
include "$app_root/sections/contact.inc.php";

include "$app_root/app/footer.inc.php";

?>