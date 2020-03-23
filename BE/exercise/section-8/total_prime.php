<?php

function check_prime($a){
    if( $a >=2){
        $count = 0;
        for($i = 1; $i <= $a; $i++){
            if($a % $i == 0) 
                $count++;            
        }
        if($count == 2) return true;
        
        return false;
    }
    return false;
}

function checkPrime($a){
    if($a >=2){
        $count = 0;
        for($i = 2; $i <= sqrt($a); $i++){
            if($a % $i == 0) $count++;
        }
        if($count == 0) return true;
        
        return false;
    }
    
    return false;
}

function total_prime($n){
    if($n >= 2){
        $total = 0;
        for($i = 2; $i <= $n ; $i++){
            if(checkPrime($i)) 
                $total += $i;
        }
        
        echo "Total = ".$total;
    }
}

total_prime(10);