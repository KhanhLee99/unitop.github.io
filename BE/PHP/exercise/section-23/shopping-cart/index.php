<?php
session_start();
ob_start();
//data
require 'data/pages.php';
require 'data/products.php';
//Xu li
require 'lib/data.php';
require 'lib/template.php';
require 'lib/pages.php';
require 'lib/products.php';
require 'lib/number.php';
require 'lib/cart.php';

?>

    <?php
        $mod = isset($_GET['mod'])?$_GET['mod']:'home';
        $act = isset($_GET['act'])?$_GET['act']:'main';

        $path = "modules/{$mod}/{$act}.php";
        if(file_exists($path)){
            require $path;
        }
        else{
            require 'inc/404.php';
        }
    ?>


