<?php

$a = 10;
$b = 5;
$c = true;

if(!$c){
    echo "c is false";
}
else echo "c is true";

function check_even($d){
    if($d % 2 == 0){
        return true;
    }
    return false;
}

if(!check_even(6)){
    echo "NO";
}
else echo "YES";