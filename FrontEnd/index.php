<?php
require 'functions.php';
require 'header.php';
?>


    <!-- Nav Menu -->
    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="index.php"><img src="images/hidebox_logo.png" style="height: 40px;" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#faq">FAQ</a> </li>
                                <li class="nav-item"><a href="login.php" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3"
                                                        style="display: <?php echo NotShow();?>" >Login</a></li>

                                <li class="nav-item"><a href="profile.php" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3"
                                                        style="display: <?php echo Show(); ?>;"><?php echo $login; ?></a></li>


                                <li class="nav-item"> <a class="nav-link" href="login.php?logout=1"
                                                         style="display: <?php echo Show(); ?>;">Log out</a> </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <p class="tagline">Meet the new era of hide and seek. </p>
            <i class="tagline" style="font-size: 10px;">Powered by <a target="_blank" href="https://naviaddress.com/">NAVIADDRESS</a></i>
        </div>
        <div style="background: ; width: 100%; height: 50px;">
        </div>
        <!-- <div class="img-holder mt-3"><img src="images/iphonex.png" alt="phone" class="img-fluid" ></div>-->
    </header>

    <div class="section light-bg" id="features">
        <div class="container">

            <div class="section-title">
                <h3>How does this work?</h3>
            </div>


            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Find</h4>
                                    <p class="card-text">You have an area, pictures and small description. That's all it takes to go.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Hide</h4>
                                    <p class="card-text">Create your own adventures in your account cabinet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Unlock a secret</h4>
                                    <p class="card-text">There are many hidden boxes in your town. What is hidden in them?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <!-- // end .section -->



    <div class="section light-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
                        <li class="media">
                            <div class="circle-icon mr-4">1</div>
                            <div class="media-body">
                                <h5>Create an Account</h5>
                                <p>Or log in using any of your social media platforms</p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="circle-icon mr-4">2</div>
                            <div class="media-body">
                                <h5>Find a secret</h5>
                                <p>Using interactive map with all hidden boxes</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">3</div>
                            <div class="media-body">
                                <h5>Go explore!</h5>
                                <p>Go out for a small adventure</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="images/iphonex.png" alt="iphone" class="img-fluid">
                </div>

            </div>

        </div>

    </div>
    <!-- // end .section -->


    <div class="section">
        <div class="container">
            <div class="section-title">
                <h3>What our users say</h3>
            </div>

            <div class="testimonials owl-carousel">
                <div class="testimonials-single">
                    <img src="images/anton.jpg" alt="client" class="client-img">
                    <blockquote class="blockquote">This app is similar to Pokemon Go, but with material things to find!</blockquote>
                    <h5 class="mt-4 mb-2">Anton Malishev</h5>
                    <p class="text-primary">Novosibirsk</p>
                </div>
                <div class="testimonials-single">
                    <img src="images/larisa.jpg" alt="client" class="client-img">
                    <blockquote class="blockquote">It's a good talk starter. Now I try to go out with my friends every weekend using this app.</blockquote>
                    <h5 class="mt-4 mb-2">Larisa Valerovna</h5>
                    <p class="text-primary">Tomsk</p>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->


    <div class="section pt-0" id="faq">
        <div class="container">
            <div class="section-title">
                <small>FAQ</small>
                <h3>Frequently Asked Questions</h3>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3">How does it work?</h4>
                    <p class="light-font mb-5">People around a globe hide a small box and point on it on a website. Anyone can try to find it.</p>


                </div>

                <div class="col-md-6">

                    <h4 class="mb-3">What to do with a box?</h4>
                    <p class="light-font mb-5">You can add some more stuff to box or you can write your name on a paper and put it inside. Then you can hide it again in another place for other players to find.</p>

                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->


    <div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:support@mobileapp.com">support@hidebox.ml</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0">
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="social-icons">
                        <!--
                        <a href="#"><span class="ti-facebook"></span></a>
                        <a href="#"><span class="ti-twitter-alt"></span></a>
                        <a href="#"><span class="ti-instagram"></span></a>-->
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->
    <footer class="my-5 text-center">
        <!-- Copyright removal is not prohibited! -->
        <p class="mb-2"><small>COPYRIGHT © 2018. ALL RIGHTS RESERVED. MOBAPP TEMPLATE BY <a href="https://colorlib.com">COLORLIB</a></small></p>

    </footer>

    <!-- jQuery and Bootstrap -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>

<?php
require 'footer.php';
?>