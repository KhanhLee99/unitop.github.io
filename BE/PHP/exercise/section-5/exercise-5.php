<?php

function check_even_positive_integer($c){
    if($c >= 0 && $c % 2 == 0){
        $c+=1;
        echo "c = $c";
    }
    else echo "c not even positive integer";
}

$a = 2;
check_even_positive_integer($a);

