<?php
require 'functions.php';
require 'header.php';
?>

<div class="nav-menu fixed-top" style="background: -webkit-linear-gradient(0deg, #2380ff 0%, #52fdd9 100%);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-lg">
                  <a class="navbar-brand" href="index.php"><img src="images/hidebox_logo.png" style="height: 40px;" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> <a style="font-size: 15px;" class="nav-link active" href="#home">ГЛАВНАЯ <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a style="font-size: 15px;" class="nav-link" href="#features">УЗНАТЬ БОЛЬШЕ</a> </li>
                            <li class="nav-item"><a href="login.php" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3"
                                                    style="font-size: 15px; display: <?php echo NotShow();?>" >ВОЙТИ</a></li>

                            <li class="nav-item" <?php if(isset($login)){echo "style='display: block'";}else{echo "style='display: none'";} ?>><a style="font-size: 15px;" href="profile.php" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3"
                                                    style="display: <?php echo Show(); ?>;"><?php if(isset($login)){echo $login;} ?></a></li>


                            <li class="nav-item"><a class="nav-link" href="login.php?logout=1"
                                                    style="font-size: 15px; display: <?php echo Show();?>" >ВЫЙТИ</a> </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>HideBox2</h1>
            <p class="tagline" style="color: white">Поиск среди миллионов тайников по всему миру </p>
            <i class="tagline" style="font-size: 10px; color: white">Powered by <a href="https://naviaddress.com/" style="color: white">NAVIADDRESS</a></i>
        </div>
        <div class="img-holder mt-3"><img src="images/iphonex.png" alt="phone" class="img-fluid"></div>
    </header>

    <div class="client-logos my-5">
        <div class="container text-center">
          <img src="images/TSU-logo.png" width="70px" style="margin-left: 100px">
          <img src="images/TUSUR-logo.png" width="100px" style="margin-left: 100px">
          <img src="images/TPU-logo.png" width="200px" style="margin-left: 100px">
            <!-- <img src="images/client-logos.png" alt="client logos" class="img-fluid"> -->
        </div>
    </div>

    <div class="section light-bg" id="features">


        <div class="container">

            <div class="section-title">
                <h3 style="color: #2486E8">Приемущества</h3>
            </div>


            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title" style="color: #2486E8">Простота</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
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
                                    <h4 class="card-title" style="color: #2486E8">Удобность</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
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
                                    <h4 class="card-title" style="color: #2486E8">Безопасность</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <!-- // end .section -->
    <div class="section">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <h2>Discover our App</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione </p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
            <div class="perspective-phone">
                <img src="images/perspective.png" width="600px" alt="perspective phone" class="img-fluid">
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
                  <img src="images/samsung_clean.png" alt="iphone" class="img-fluid">
              </div>

          </div>

      </div>

  </div>
  <!-- // end .section -->
    <!-- // end .section -->


    <div class="section">
        <div class="container">
            <div class="section-title">
                <small>TESTIMONIALS</small>
                <h3>What our Customers Says</h3>
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
    <!-- // end .section -->
    <footer class="my-5 text-center">
        <!-- Copyright removal is not prohibited! -->
        <p class="mb-2"><small>COPYRIGHT © 2018. ALL RIGHTS RESERVED. MOBAPP TEMPLATE BY <a href="https://colorlib.com">COLORLIB</a></small></p>

        <!--
        <small>
            <a href="#" class="m-2">PRESS</a>
            <a href="#" class="m-2">TERMS</a>
            <a href="#" class="m-2">PRIVACY</a>
        </small>
         -->
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
