<?php


//$n = 22;
 function total_even($n){
     $total = 10;
     for($i = 0; $i <= $n; $i+=2){
         $total = $total + $i;
     }
     return $total;
 }


// if($n >= 2 && $n % 2 == 0){
     echo "kq: ".total_even(10);
// }
