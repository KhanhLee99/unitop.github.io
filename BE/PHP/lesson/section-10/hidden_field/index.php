<?php

function show_array($arr) {
    if (is_array($arr)) {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $info_user = array(
        'username' => 'admin',
        'password' => 'admin123'
    );
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "username không được để trống";
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $error['password'] = "password không được để trống";
    } else {
        $password = $_POST['password'];
    }
    
    if (empty($error)) {
;
        if ($username == $info_user['username'] || $password == $info_user['password']) {
            $redirect_to = $_POST['redirect_to'];
            header("location:{$redirect_to}");
        } else {
            $error['login'] = "Đăng nhập ko hợp lệ";
            echo $error['login'];
        }
    }else{
        show_array($error);
    }

}
?>
<html lang="en">
    <head>
        <title> Form </title>
        <meta charset="utf-8">

    </head>
    <body >
        <form action="" method="POST">
            USERNAME: <input type="text" name="username"> <br>
            PASSWORD: <input type="password" name="password"> <br>
            <input type="hidden" name="redirect_to" value="cart.php">
            <input type="submit" name="btn_submit" value="login">
        </form>
    </body>

</html>