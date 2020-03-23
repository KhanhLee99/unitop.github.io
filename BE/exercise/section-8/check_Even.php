<?php

function check_even($a) {
    if ($a % 2 == 0) {
        echo "This is even number";
    } else {
        echo "This isn't even number";
    }
}

check_even(5);

function checkEven($a) {
    if($a % 2 == 0) return true;
    return false;
}

if(checkEven(5)){
    echo "<br>Đây là sô chẵn";
}
else{
    echo "<br>Đây là số lẻ";
}

