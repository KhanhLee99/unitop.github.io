<?php

#Tao mang rong
$error = array();

#Them gia tri cho mang rong
$error['username']='Mời bạn nhập lại username';

#Tao mang key mac dinh
$arr_odd = array(1,3,5,7,9);

#Tao mang key xac dinh
$info = array('id' => 1, 'fullname' => 'Le Viet Khanh', 'email' => 'lvk99@gmail.com');

echo "<pre>";
print_r($error);
print_r($arr_odd);
print_r($info);
echo "</pre>";
