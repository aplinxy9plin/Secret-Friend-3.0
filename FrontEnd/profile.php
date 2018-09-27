<?php
    require 'functions.php';
    require 'header.php';
?>


<div class="nav-menu fixed-top">
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
</div>

<header class="" id="">
    <div class="container mt-0">
        <div class="row">
            <div class="col-md-6" style="text-align: left;">
                <h3 style="color: black;"><?php echo $login; ?></h3>

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

</header>

    <div class="container mt-0">
        <div class="row">
            <div id="googleMap1" style="width:100%; height:500px;"></div>
        </div>
    </div>
<script>
    function myMap() {
        var mapOptions1 = {
            center: new google.maps.LatLng(51.508742,-0.120850),
            zoom:9,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map1 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions1);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhm2PbVysTk8XFx6Vbcf9oPekgbCrmAJ8&callback=myMap"></script>


<?php
require 'header.php';
?>

