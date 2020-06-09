<?php
session_start();
ob_start();
//data
require 'data/user.php';
//xu li
require 'lib/user.php';
require 'lib/template.php';
require 'lib/validation.php';
?>
<?php
$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';
$path = "modules/{$mod}/{$act}.php";
if(isset($_COOKIE['is_login'])){
    $_SESSION['is_login'] = true;
    $_SESSION['user_login'] = $_COOKIE['user_login'];
}
if (file_exists($path)) {
    require $path;
}
if(!isset($_SESSION['is_login']) && $mod != 'login'){
    header('location: ?mod=login&act=main');
}
?>

