<?php
    require 'functions.php';

    if (isset($_GET['logout'])){
        setcookie('token', null, time() - 3600);
        session_unset('token');
        header('Location: http://hidebox.ml/');
        echo "logout get";
    }

?>
<head>
    <meta charset="UTF-8">
</head>
<div style="display: <?php echo Show(); ?>;">
    Confidential information
    <b>
        <?php echo "welcome, " . $login;?>
    </b>
</div>
<div style="position: absolute; width: 400px; height: 300px; left: 50%; margin-left: -200px; background: red;">

    <script src="//ulogin.ru/js/ulogin.js"></script>
    <div id="uLogin" data-ulogin="display=panel;theme=classic;fields=first_name,last_name;providers=vkontakte,odnoklassniki,mailru,facebook;hidden=other;redirect_uri=http%3A%2F%2Fhidebox.ml;mobilebuttons=0;"></div>
    <a href="index.php">Back</a>
</div>

</body>
</html>
