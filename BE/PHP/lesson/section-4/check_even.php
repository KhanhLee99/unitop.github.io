<?php

//============================
//KIỂM TRA SỐ CHẴN
//============================

function check_even($a){
    if($a % 2 == 0){
        return true;
    }
    return false;
}

$check = check_even(5);

if($check == true){
    echo "True";
}
 else {
    echo "False";
}