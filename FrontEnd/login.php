<?php
require 'functions.php';

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
            while($row = $result->fetch_assoc()) {
                header('Location: http://hidebox.ml/login.php?e=2');
            }
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
            return "Неправильный логин или пароль";
        } else if ($_GET['e'] == 2){
            return "Этот логин уже занят";
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

require 'header.php';
?>
<div style="display: <?php echo Show(); ?>;">
    Confidential information
    <b>
        <?php echo "welcome, " . $login;?>
    </b>
</div>
<div style=" display: none; position: fixed; width: 100%; height: 100%; top: 0; left: 0; right: 0; bottom: 0; background-image: linear-gradient(to right top, #ed4d4d, #f53c79, #e941aa, #c659d9, #8074ff);"></div>


        <div class="container">
            <div class="row justify-content-md-center" >
                <div class="col-md-4" style="top: 50px; background: -webkit-linear-gradient(0deg, #75e4ff 0%, #7bd6ff 100%); text-align: center; padding: 15px; border-radius: 15px;">
                    <a href="index.php"><img src="images/hidebox_logo.png" style="height: 40px;" /></a>

                    <h4>Войти с помощью</h4>
                    <script src="//ulogin.ru/js/ulogin.js"></script>
                    <div id="uLogin" data-ulogin="display=panel;theme=classic;fields=first_name,last_name;providers=vkontakte,odnoklassniki,mailru,facebook;hidden=other;redirect_uri=http%3A%2F%2Fhidebox.ml;mobilebuttons=0;"></div>
                    <br>
                    <p>- или -</p>

                    <i style="display: <?php echo errShow(); ?>; color: rgba(116,20,67,0.96);"><?php echo getErrorText(); ?></i>
                    <form method="POST" action="login.php">
                        <h4>Если у Вас уже есть аккаунт</h4>
                        <input placeholder="Login" value="<?php echo GetLoginForm(); ?>" name="login" />
                        <br><input placeholder="Password" type="password" name="password" />
                        <br><button class="btn btn-primary" type="submit" style="margin: 10px 0;">Войти</button>
                    </form>
                    <br>
                    <p>- или -</p>
                    <form method="POST" action="login.php">
                        <h4>Регистрация</h4>
                        <input placeholder="Login" name="reg_login" />
                        <br><input placeholder="Password" type="password" name="reg_password" />
                        <br><button class="btn btn-primary" type="submit" style="margin: 10px 0;">Создать аккаунт</button>
                    </form>
                </div>
            </div>
        </div>




<?php
require 'footer.php';
?>