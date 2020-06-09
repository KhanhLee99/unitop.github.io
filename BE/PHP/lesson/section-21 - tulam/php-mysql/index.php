<?php
require 'db/connect.php';
require 'data/products.php';
require 'lib/data.php';
require 'lib/users.php';
require 'lib/template.php';
require 'lib/validation.php';

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


