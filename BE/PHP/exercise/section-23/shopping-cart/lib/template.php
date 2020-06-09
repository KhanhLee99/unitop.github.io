<?php

function get_header($version = '')
{
    if (!empty($version)) {
        $file = "inc/header-{$version}.php";
    } else {
        $file = 'inc/header.php';
    }
    if (file_exists($file)) {
        require $file;
    } else {
        echo "Khong ton tai file {$file}";
    }
}

function get_footer()
{
    $file = 'inc/footer.php';
    if (file_exists($file)) {
        require $file;
    } else {
        echo "Khong ton tai file {$file}";
    }
}

function get_sidebar(){
    $file = 'inc/sidebar.php';
    if(file_exists($file)){
        require $file;
    }
    return false;
}