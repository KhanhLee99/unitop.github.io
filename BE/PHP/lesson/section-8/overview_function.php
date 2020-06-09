<?php

function sum_1($a, $b){
    $t = $a + $b;
    echo $t."<br>";
}

function sum_2($a, $b){
    $t = $a + $b;
    return $t;
}

sum_1(10,5);

$total = sum_2(10,5);

echo sum_2(10,5);
