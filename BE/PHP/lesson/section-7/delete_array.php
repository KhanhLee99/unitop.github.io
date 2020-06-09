<?php

$list_users = array(
    1 => array('id'=>1, 'fullname' => 'NVA', 'phone' => '123456'),
    2 => array('id'=>2, 'fullname' => 'NVB', 'phone' => '345678'),
    3 => array('id' => 3, 'fullname' => 'NVC', 'phone' => '987654')
);

echo "<pre>";
print_r($list_users);
echo "</pre>";

//Xoa user thu 3
unset($list_users[3]);

echo "<pre>";
print_r($list_users);
echo "</pre>";

//Xoa SDT cua user thu 2
unset($list_users[2]['phone']);

echo "<pre>";
print_r($list_users);
echo "</pre>";

//Xoa mang list_users
unset($list_users);

echo "<pre>";
print_r($list_users);
echo "</pre>";
