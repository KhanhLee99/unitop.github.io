<?php

$list_odd = array();

for($i = 3; $i <= 150 ;$i++){
    if($i % 2 != 0){
        $list_odd[] = $i;
    }
}

if(empty($list_odd)){
    echo "Array error <br>";
}
else{
    echo "<pre>";
    print_r($list_odd);
    echo "</pre>";
}

