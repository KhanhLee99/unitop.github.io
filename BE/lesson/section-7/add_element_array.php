<?php

#Them phan tu vao mang co key xac dinh
$info = array('id' => 1, 'fullname' => 'Le Viet Khanh', 'email' => 'lvk99@gmail.com');

$info['phone'] = '0935486181'; //Them phan tu so dien thoai

#Them phan tu vao mang co key mac dinh
$list_prime = array(2,3,5,7); //Mang so nguyen to

$list_prime[] = 11;

echo "<pre>";
print_r($list_prime);
print_r($info);
echo "</pre>";