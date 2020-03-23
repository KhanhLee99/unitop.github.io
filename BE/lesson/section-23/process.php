<?php
$price = $_POST['price'];
$num_order = $_POST['num_order'];
$total = $price * $num_order;
$result= array(
    'price' => $price,
    'num_order' => $num_order,
    'total' => $total
);

//Xuất thì echo
echo json_encode($result); //1.text: số, chuỗi, html - 2.json: array có nhiều giá trị cùng 1 lúc
                           