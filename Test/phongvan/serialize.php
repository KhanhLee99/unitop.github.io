<?php

// Hàm serialize() sẽ mã hóa giá trị biến truyền vào thành một chuỗi đặc biệt, hàm trả về kết quả là chuỗi được mã hóa.
$var = array(
    "php",
    2408,
    "css",
    "freetuts.net"
);
$varSerialize = serialize($var);
echo "<pre>";
print_r($varSerialize); //a:4:{i:0;s:3:"php";i:1;i:2408;i:2;s:3:"css";i:3;s:12:"freetuts.net";}
echo "</pre>";
