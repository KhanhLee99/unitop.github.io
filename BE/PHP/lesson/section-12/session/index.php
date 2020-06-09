<?php
    session_start();
    ob_start();


    if(!isset($_SESSION['is_login'])){
        header("location: login.php");
    }
    else{
        echo $_SESSION['is_login'];
    }
?>
<a href="logout.php">Dang xuat</a>