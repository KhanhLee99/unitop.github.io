<?php

$a= 5; 
$b =10;

function sum(){
    global  $a, $b;
    return $a + $b;
}

echo sum();

function sub(){
    return $GLOBALS['a'] - $GLOBALS['b'];
}

echo "<br>".sub();


