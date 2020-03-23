<?php

function is_username($username) {
    $paten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($paten, $username, $matches))
        return false;
    return true;
}

function is_password($password) {
    $paten = "/^([A-Z]){1}([\w.\_!@#$%^&*()]+){5,31}$/";
    if (!preg_match($paten, $password, $matches))
        return false;
    return true;
}

function form_error ($label_field){   
    global $error;
     if(!empty($error[$label_field])) return $error[$label_field];
}

function get_value($label_field){
    
    global $$label_field;
    
    if(!empty($$label_field)) return $$label_field;
}


