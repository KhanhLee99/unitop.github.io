<?php
function test(){
    $numargs = func_num_args();
    echo "Số lượng tham số truyền vào: {$numargs} <br>"; // 7
    if($numargs > 3){
        echo "Tham số thứ 1 có giá trị là: ".func_get_arg(0) . "<br>"; //1
    }
}

test(1, 2, 3, 4, 5, 6, 7);
//func_get_arg(0) = 1
//func_get_arg(1) = 2
//func_get_arg(2) = 3
//func_get_arg(3) = 4
// ...