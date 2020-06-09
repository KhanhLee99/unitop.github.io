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
//Lay ra gia tri info fullname
echo $info['fullname'];
echo "</pre>";

?>

<html>
    <head>
        <title>Lấy dữ liệu</title>
    </head>
</html>
<body>
    <p>ID : <strong><?php echo $info['id'] ?></strong></p>
    <p>Fullname : <strong><?php echo $info['fullname'] ?></strong></p>
    <p>Email : <strong><?php echo $info['email'] ?></strong></p>
</body>
