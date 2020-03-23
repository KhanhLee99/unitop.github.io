<?php
ob_start();
session_start();
//data
require 'data/pages.php';
require 'data/products.php';
//lib
require 'lib/data.php';
require 'lib/page.php';
require 'lib/product.php';
require 'lib/number.php';
require 'lib/template.php';

?>

<?php
$mod = isset($_GET['mod']) ? $_GET['mod'] : 'home';
$act = isset($_GET['act']) ? $_GET['act'] : 'main';
$path = "modules/{$mod}/{$act}.php";
if(file_exists($path)){
    require $path;
}
?>

<?php

?>