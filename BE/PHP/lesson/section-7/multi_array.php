<?php

$list_users = array(
    1 => array('id'=>1, 'fullname' => 'NVA'),
    2 => array('id'=>2, 'fullname' => 'NVB')
);


echo "<pre>";
print_r($list_users);
echo "</pre>";


$list_users[3] = array('id' => 3, 'fullname' => 'NVC');

echo "<pre>";
print_r($list_users);
echo "</pre>";

//Lay ra user thu 3 trong mang
$info = $list_users[3];
echo "<pre>";
print_r($list_users[3]) ;
echo "</pre>";

//Lay ra ten cua user thu 3
echo $info['fullname'];
echo $list_users[3]['fullname'];