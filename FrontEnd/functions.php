<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "navisanta";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$file_name = 'http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . $_SERVER['HTTP_HOST'];

$s = file_get_contents($file_name);
$user = json_decode($s, true);


if (!isLogin()){
    global $user;
    if (!isset($user['error'])){
        global $login, $conn;
        $ulogin_id = $user["uid"];

        $sql = "SELECT * FROM `users` WHERE `link`='$ulogin_id' LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $login = $row['login'];
                //echo "login is " . $login . "<br>";
                //echo "token should be" . $token . "<br>";
                SetLog($row['token']);
            }
        } else {
            $name = $user['first_name'] + $user['last_name'];
            CreateUser($user['uid'], $name, $user['network']);
        }


    } else {
//echo "no ulogin data!" . "<br>";
    }
} else {
//echo "user is logged in" . "<br>";
}

function CreateUser($link, $login, $network){
    global $conn;

    $token = genToken($link);
    $sql = "INSERT INTO `users` (`login`, `token`, `link`, `network`) VALUES ('$login', '$token', '$link', '$network')";
    $result = $conn->query($sql);

    SetLog($token);
}

function SetLog($token){
    setcookie('token', $token, time() + 3600);
//setcookie('token', $token, time() + 360000);
//echo "cookie token is " . $token . "<br>";
    $_SESSION['token'] = $token;
}

function genToken($login){
    $secret_key = "d488c07746a2d01d157e922098582b14f4868445";

    $data = $login + $secret_key;

    return hash('sha256', $data);
}


function isLogin(){
    if (isset($_COOKIE['token']) || isset($_SESSION['token'])){
        $token = null;
        if (isset($_COOKIE['token'])){
            $token = $_COOKIE['token'];
        } else {
            $token = $_SESSION['token'];
        }

        global $conn, $login;

        $sql = "SELECT * FROM `users` WHERE `token`='$token' LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $login = $row['login'];
            }
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }

}

function Show(){
    $log = isLogin();
    if ($log == true){
        return "block";
    } else {
        return "none";
    }
}

function NotShow(){
    $log = isLogin();
    if ($log == true){
        return "none";
    } else {
        return "block";
    }
}
