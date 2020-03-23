<?php

session_start();
ob_start();

# Config
require "config/email.php";

# Data
require "data/pages.php";
require "data/product.php";

# Thư viện
require "library/data.php";
require "library/template.php";
require "library/pages.php";
require "library/product.php";
require "library/number.php";
require "library/cart.php";
require "library/url.php";
require "library/validation.php";
require "library/email.php";



$module = isset($_GET['mod']) ? $_GET['mod'] : 'home';
$action = isset($_GET['act']) ? $_GET['act'] : 'main';

$path = "./modules/{$module}/{$action}.php";
if (file_exists($path)) {
    require "{$path}";
} else {
    require "./modules/404.php";
}

?>

