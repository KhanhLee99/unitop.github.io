<?php

function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}

function get_gender($gender =''){
    $list_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ'
    );
    if(array_key_exists($gender, $list_gender)){
        return $list_gender[$gender];
    }
    return false;
}