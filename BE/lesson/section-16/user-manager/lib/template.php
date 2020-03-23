<?php

function get_header(){
    require 'inc/header.php';
}

function get_footer(){
    require 'inc/footer.php';
}

function show_array($arr){
    if(is_array($arr)){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}