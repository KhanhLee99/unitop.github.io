<?php
ob_start();
session_start();


setcookie('is_login', true, time() - 3600);
setcookie('username',$password, time() - 3600);

unset($_SESSION['is_login']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['is_Register']);



if(!isset($_SESSION['is_Register'])){
    header("location: register.php");
}else{
    header("location: login.php");
}





?>