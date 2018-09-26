<?php
require 'functions.php';
require 'header.php';

    if (isLogin()){
        header('Location: http://hidebox.ml/');

    }

    if (isset($_POST['login'])){

        $log = $_POST['login'];
        $pass = $_POST['password'];
        $pass = hash('sha256', $pass);
        $sql = "SELECT * FROM `users` WHERE `login`='$log' AND `password`='$pass' LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                SetLog($row['token']);
                header('Location: http://hidebox.ml/');
            }
        } else {
            $log = base64_encode($log);
            header('Location: http://hidebox.ml/login.php?e=1&login=' . $log);
        }
    }

    if (isset($_POST['reg_login'])){
        $log = $_POST['reg_login'];
        $pass = $_POST['reg_password'];

        $sql = "SELECT * FROM `users` WHERE `login`='$log'LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            header('Location: http://hidebox.ml/login.php?e=2');
        } else {

            $token = genToken($log);
            $pass = hash('sha256', $pass);
            $sql = "INSERT INTO `users` (`login`, `password`, `token`, `network`) VALUES('$log', '$pass', '$token', 'hidebox account')";
            $result = $conn->query($sql);
            SetLog($token);
            header('Location: http://hidebox.ml/');
        }
    }


    if (isset($_GET['logout'])){
        setcookie('token', null, time() - 3600);
        session_unset('token');
        header('Location: http://hidebox.ml/');
        echo "logout get";
    }

    function GetLoginForm(){
        return base64_decode($_GET['login']);
    }

    function getErrorText(){
        if ($_GET['e']==1){
            return "Incorrect login or password";
        } else if ($_GET['e'] == 2){
            return "This login is already taken";
        } else {
            return "no errors. but this shouldn't be seen";
        }
    }

    function isError(){
        if (isset($_GET['e'])){
            return true;
        } else {
            return false;
        }
    }

    function errShow(){
        if (isError()){
            return "block";
        } else {
            return "none";
        }
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
<div style="position: fixed; width: 100%; height: 100%; top: 0; left: 0; right: 0; bottom: 0; background-image: linear-gradient(to right top, #ed4d4d, #f53c79, #e941aa, #c659d9, #8074ff);"></div>

<div style="position: absolute; width: 400px; height: auto; top: 100px; left: 50%; margin-left: -200px; box-shadow: 0px 0px 15px rgba(20,0,0,0.33); background: #fffff9; padding: 15px; border-radius: 15px;">
    <a href="index.php"><img src="images/favicon.ico" /></a>

    <h3>Log in with your social network</h3>
    <script src="//ulogin.ru/js/ulogin.js"></script>
    <div id="uLogin" data-ulogin="display=panel;theme=classic;fields=first_name,last_name;providers=vkontakte,odnoklassniki,mailru,facebook;hidden=other;redirect_uri=http%3A%2F%2Fhidebox.ml;mobilebuttons=0;"></div>

    <i style="display: <?php echo errShow(); ?>;"><?php echo getErrorText(); ?></i>
    <form method="POST" action="login.php">
        <h3>If you already have an account</h3>
        <input placeholder="Login" value="<?php echo GetLoginForm(); ?>" name="login" />
        <input placeholder="Password" type="password" name="password" />
        <button type="submit">Sign in</button>
    </form>

    <form method="POST" action="login.php">
        <h3>Register new user</h3>
        <input placeholder="Login" name="reg_login" />
        <input placeholder="Password" type="password" name="reg_password" />
        <button type="submit">Register</button>
    </form>

</div>

</body>
</html>
<?php
require 'footer.php';
?>