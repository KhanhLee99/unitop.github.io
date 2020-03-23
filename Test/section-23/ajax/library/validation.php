<?php

function form_error($label_field) {
    global $error;
    if (!empty($error[$label_field])) {
        return "<p class= 'error'>{$error[$label_field]}</p>";
    }
}

function set_value($label_field) {
    global $$label_field;
    if (!empty($$label_field)) {
        return $$label_field;
    }
}

function is_phone_number($phone) {
    $partten = "/^(09|08|01[2|6|8|9])+([0-9]){8}$/";
    if (!preg_match($partten, $phone, $matchs)) {
        return false;
    }
    return true;
}
