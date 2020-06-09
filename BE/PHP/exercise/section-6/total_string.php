<?php

function total_string($n){
    $total = 0;
    
    for($i = 1; $i <= $n ; $i++){
        $total += $i / ($i + 1);
    }
    return $total;
}

echo "Result : ".total_string(10);

