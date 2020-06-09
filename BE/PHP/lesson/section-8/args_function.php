<?php

function sum_multi_numbers(){
    
    $list_arr = func_get_args();
    echo "<pre>";
    print_r($list_arr);
    echo "</pre>";
    
    $total = 0;
    foreach ($list_arr as $item){
        $total += $item;
    }
    
    echo $total;
}

sum_multi_numbers(1,2,3);

echo "<br>";

function sum_even($list_even = array()){
    if(is_array($list_even)){
        $total = 0;
        foreach ($list_even as $item){
            $total += $item;
        }
        echo $total;
    }
}
sum_even(array(2,4,6));

echo "<br>";
        
function input_html($name, $value, $option = array()){
    $name = func_get_arg(0);
    $value = func_get_arg(1);
    $option = func_get_arg(2);
    if(!empty($option)){
        $id = $option['id'];
        $class = $option['class'];
    }
    $input = "<input type = 'text' name = '{$name}' value ='{$value}' id = '{$id}' class = '{$class}' /input>";
    echo $input;
}
input_html('username','',array('id' => 'username', 'class' => 'form_input'));
