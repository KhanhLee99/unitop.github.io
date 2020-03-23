<?php

function get_array_even($array_int = array()){
    $array_temp = array();
    
    if(is_array($array_int)){
        if(!empty($array_int)){
            foreach($array_int as $item){
                if($item % 2 == 0){
                    $array_temp[]=$item;
                }
            }
            return $array_temp;
        }
    }
    return FALSE;
}

$my_arr_int = array(1,2,3,4,5,6,7,8,0, -2, -4);

print_r(get_array_even($my_arr_int));

