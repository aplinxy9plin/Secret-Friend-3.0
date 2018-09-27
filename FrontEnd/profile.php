<?php
    require 'functions.php';
    require 'header.php';
?>
<style>
#mmenu_screen > .row {
    min-height: 100vh;
}

.flex-fill {
    flex:1 1 auto;
}
.half{
  margin-top: 100px;
}
.achiv_a{
  text-decoration: none;
}
.nav-link{
  color: black;
  padding-left: 0px;
}
.nav-link:hover{
  color: grey;
}
</style>
<!-- Nav Menu -->
<div class="nav-menu fixed-top" style="background: -webkit-linear-gradient(0deg, #2380ff 0%, #52fdd9 100%);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">HideBOX</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> <a style="font-size: 15px;" class="nav-link active" href="#home">ГЛАВНАЯ <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a style="font-size: 15px;" class="nav-link" href="#features">УЗНАТЬ БОЛЬШЕ</a> </li>
                            <li class="nav-item"><a href="login.php" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3"
                                                    style="display: <?php echo NotShow();?>" >ВОЙТИ</a></li>

                            <li class="nav-item"><a style="font-size: 15px;" href="profile.php" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3"
                                                    style="display: <?php echo Show(); ?>;"><?php echo $login; ?></a></li>


                            <li class="nav-item"> <a style="font-size: 15px;" class="nav-link" href="login.php?logout=1"
                                                     style="display: <?php echo Show(); ?>;">ВЫЙТИ</a> </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- <div class="nav-menu fixed-top">
    <div class="container"  style="background: #31ea3d; border-radius: 15px;">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-lg">
                    <a class="navbar-brand" href="index.php"><img src="images/favicon.ico" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> <a class="nav-link active" href="profile.php">PROFILE<span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Achievements</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="#">Achievements</a> </li>
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
</div> -->

<!-- <header class="" id="">
    <div class="container mt-0">
        <div class="row">
            <div class="col-md-6" style="text-align: left;">
                <h3 style="color: black;"><?php //echo $login; ?></h3>

                <a href="#" class="btn btn-success" style="">Create</a>
            </div>

            <div class="col-md-6" style="text-align: right;">
                <h3 style="color: black;">Achievements</h3>

                <div class="card mb-3" style="">
                    <a class="nav-link" href="#">Collect 1 box <span class="badge badge-warning">10G</span></a>
                </div>
                <div class="card mb-3" style="">
                    <a class="nav-link" href="#">Collect 5 boxes <span class="badge badge-warning">100G</span></a>
                </div>
                <div class="card mb-3" style="">
                    <a class="nav-link" href="#">Make a hidden box <span class="badge badge-warning">30G</span></a>
                </div>


            </div>
        </div>
    </div>

</header> -->
<div id="mmenu_screen" class="container-fluid main_container text-white d-flex">
    <div class="row flex-fill">
        <div class="col-sm-6 h-100">
            <div class="row h-50" style="background-color: #F9F9F9">
                <div class="col-sm-12" id="mmenu_screen--book">
                    <!-- Button for booking -->
                    <div class="half">
                      <div class="row">
                          <div class="col-md-6" style="text-align: left;">
                              <h3 style="color: black; font-size: 40px" class="display-4"><?php echo "ПРИВЕТ, " . $login . "!"; ?></h3><br>
                              <!-- <a href="#" class="btn btn-lg btn-success" style="">Create</a> -->
                              <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title">СОЗДАТЬ ТАЙНИК</h5>
                                  <p class="card-text">Создание тайника – большой шаг в жизни любого хайдбоксера.</p>
                                  <a href="#" class="btn btn-primary">Спрятать новый тайник</a>
                                </div>
                              </div>
                          </div>

                          <div class="col-md-6" style="text-align: right;">
                              <h3 class="display-4" style="color: black; font-size: 40px">ДОСТИЖЕНИЯ</h3>

                              <div class="card mb-3" style="">
                                  <a class="nav-link" href="#">Нашел 1 тайник <span class="badge badge-warning">10G</span></a>
                              </div>
                              <div class="card mb-3" style="">
                                  <a class="nav-link" href="#">Нашел 5 тайников <span class="badge badge-warning">100G</span></a>
                              </div>
                              <div class="card mb-3" style="">
                                  <a class="nav-link" href="#">Сделал первый тайник <span class="badge badge-warning">30G</span></a>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row h-50" style="background-color: #F9F9F9">
                <div class="col-sm-12" id="mmenu_screen--information">
                  <hr style="height: 0.1px;background-color: #ADADAD;">
                    <!-- Button for information -->
                    <div style="margin-top: 10px">
                      <h1 class="display-4" style="color: black; font-size: 40px">РЕЙТИНГ</h1>
                      <table class="table" style="color: black">
                        <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col">Имя</th>
                            <th scope="col">Найдено</th>
                            <th scope="col">Спрятано</th>
                          </tr>
                        </thead>
                        <tbody style="font-size: 20px">
                          <tr>
                            <th scope="row">🥇</th>
                            <td>Никита Аплин</td>
                            <td>14</td>
                            <td>5</td>
                          </tr>
                          <tr>
                            <th scope="row">🥈</th>
                            <td>Кирилл Качалов</td>
                            <td>10</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">🥉</th>
                            <td>Полина Христенко</td>
                            <td>2</td>
                            <td>9</td>
                          </tr>
                          <tr>
                            <th scope="row">🎉</th>
                            <td>Татьяна Кирбаева</td>
                            <td>1</td>
                            <td>3</td>
                          </tr>
                          <tr>
                            <th scope="row">🎉</th>
                            <td>Сергей Лапин</td>
                            <td>2</td>
                            <td>0</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mmenu_screen--direktaction" style="padding: 0px">
            <div id="googleMap1" style="width: 100%; height: 100%;"></div>
        </div>
    </div>
</div>
<!-- <section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 responsive-wrap">
              hello
            </div>
          </div>
    <div class="col-md-5 responsive-wrap map-wrap">
        <div class="map-fix">
          <div id="googleMap1" style="width: 100%; height: 100%;"></div>
        </div>
    </div>
  </div>
</section> -->
<script>
    function myMap() {
        var mapOptions1 = {
            center: new google.maps.LatLng(56.49771,84.97437),
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map1 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions1);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhm2PbVysTk8XFx6Vbcf9oPekgbCrmAJ8&callback=myMap&libraries=places"></script>


<?php
require 'header.php';
?>
