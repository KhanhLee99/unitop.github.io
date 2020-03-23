<?php
require 'print_r.php';

function test(){
    if(func_num_args() > 0){
        return func_get_args();
    }
    return false;
}

$result =  test(1,2,3,4,5,6);

show_array($result);


