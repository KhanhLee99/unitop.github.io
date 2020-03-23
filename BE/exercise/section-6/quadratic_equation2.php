<?php

//==========================
//GIẢI PT BẬC 2
//==========================

#TH a = 0:
  
     #TH b = 0, c = 0: vô số nghiệm
     #TH b = 0 , c#0: vô nghiệm
     #TH b#0: x= -c/b

#TH a#0: Tính delta = b^2 - 4ac


     #delta > 0: 2 nghiệm
     #delta = 0: nghiệm kép
     #delta <0 : vô nghiệm
  
function equation2($a,$b,$c){
    if($a == 0){
        if($b == 0){
            if($c == 0){
                echo "Vo So Nghiem";
            }
            else{
                echo "Vo Nghiem"; 
            }
        } else{
            $x = -$c/$b;
            echo "x= $x";
        }   
    }
    else{
        $d = $b*$b - 4*$a*$c;
        if($d < 0){
            echo "Vo Nghiem";
        }
        elseif($d == 0){
            $x = -$b / (2*$a); 
            echo "x = $x";
        }
        else{
            $x1 = (-$b - sqrt($d)) / (2*$a);
            $x2 = (-$b + sqrt($d)) / (2*$a);
            echo "x1 = {$x1} <br> x2 = {$x2}";
        }
    }
}

equation2(5,-3,-2);


