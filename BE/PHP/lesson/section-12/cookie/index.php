<?php
ob_start();
session_start();
//session_destroy();

if(!isset($_SESSION['is_login'])){
  //  header("location: login.php");
    echo "<a href='login.php'>Đăng nhập</a>"  ;
}
else{
    echo "This is HOME <br>";
    echo $_SESSION['username']."<br>";
    echo $_SESSION['password']."<br>";

    echo "<a href='logout.php'>Đăng xuất</a>";
    // echo $_COOKIE['username']."<br>";
}

?>

