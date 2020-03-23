<?php
session_start();
ob_start();
// data
require 'data/pages.php';
require 'data/products.php';
//lib
require 'lib/template.php';
require 'lib/pages.php';
require 'lib/products.php';
require 'lib/data.php';
require 'lib/number.php';
require 'lib/cart.php';
require 'lib/url.php';

?>
<?php
$mod = !empty($_GET['mod'])?$_GET['mod']:'home';
$act = !empty($_GET['act'])?$_GET['act']:'main';
$path = "modules/{$mod}/{$act}.php";
if(file_exists($path)){
    require $path;
}else{
    require 'inc/404.php';
}
?>
