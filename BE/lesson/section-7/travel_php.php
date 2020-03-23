<?php

#DUYET MANG 1 CHIEU
$list_even = array(0, 2, 4, 6, 8);

$total = 0;
foreach ($list_even as $item) {
    echo $item . "<br>";
    $total += $item;
}

echo "Total = $total <br>";

foreach($list_even as $key => $item){
    echo "{$key} => {$item}<br>";
}

#DUYET MANG DA CHIEU
$list_users = array(
    1 => array('id'=>1, 'fullname' => 'NVA', 'phone' => '123456'),
    2 => array('id'=>2, 'fullname' => 'NVB', 'phone' => '345678'),
    3 => array('id' => 3, 'fullname' => 'NVC', 'phone' => '987654')
);

foreach($list_users as $item){
    echo "<pre>";
    print_r($item);
    echo "</pre>";
}

foreach($list_users as $key => $item){
    print_r("$key =>".$item['fullname']."<br>");
}

foreach($list_users as $item){
    echo "<pre>";
    print_r($item);
    echo "</pre>";
}


foreach($list_users as $item){
    echo $item['id']."<br>";
    echo $item['fullname']."<br>";
    echo $item['phone']."<br>";
    
    echo "<br>--------------------<br>";
}