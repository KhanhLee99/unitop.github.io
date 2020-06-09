<?php
function show_array($arr){
    if(is_array($arr)){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}
function get_header($ver = ''){
    if(!empty($ver)){
        $file = "inc/header-{$ver}.php";
    }
    else{
        $file = 'inc/header.php';
    }
    if(file_exists($file)){
        require $file;
    }
    return false;
}
function get_footer($ver = ''){
    if(!empty($ver)){
        $file = "inc/footer-{$ver}.php";
    }
    else{
        $file = 'inc/footer.php';
    }
    if(file_exists($file)){
        require $file;
    }
    return false;
}
