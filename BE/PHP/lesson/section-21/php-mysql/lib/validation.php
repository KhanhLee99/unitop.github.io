<?php
function check_empty($label_field){
    global $error;
    if(!empty($error[$label_field])){
        return $error[$label_field];
    }
    return false;
}

function get_value($label_field){
    global $error;
    global $$label_field;
    if(empty($error[$label_field])){
        return $$label_field;
    }
}