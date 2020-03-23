<?php
function show_array($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

function get_value($label_field){
    global $error, $$label_field;
    if(empty($error[$label_field])){
        return $$label_field;
    }
}

function form_error($label_field){
    global $error;
    if(!empty($error[$label_field])){
        return "<p style='color:red'>{$error[$label_field]}</p>";
    }
}