<?php

use MicrosoftAzure\Storage\Common\Internal\Serialization\ISerializer;

if (isset($_POST['btn-login'])) {
    $error = array();
    #kiểm tra username
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống username";
    } else {
        $pattern_us = "/^[A-Za-z0-9_\.]{6,32}$/";
        if (!preg_match($pattern_us, $_POST['username'])) {
            $error['username'] = "Username không đúng định dạng";
        } else {
            $username = $_POST['username'];
        }
    }

    #kiểm tra password
    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống password";
    } else {
        $pattern_pw = "/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/";
        if (!preg_match($pattern_pw, $_POST['password'])) {
            $error['password'] = "Password không đúng định dạng";
        } else {
            $password = $_POST['password'];
        }
    }

    #
    if (empty($error)) {
        if (check_login($username, $password)) {
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            if (isset($_POST['remember-me'])) {
                setcookie('is_login', true, time() + 3600);
                setcookie('user_login', $username, time() + 3600);
            }

               header('location: ?mod=home&act=main');
        } else {
            $error['account'] = "Mật khẩu không đúng hoặc tài khoản không tồn tại";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <div class="block">
        <h3 class="title_form_login">Đăng nhập</h3>
        <form action="" method="POST">
            <div class="info_user">
                <input type="text" name="username" value="<?php if (isset($_POST['btn-login'])) echo get_value('username'); ?>" placeholder="Username" class="input">
                <p style="color: red;"><?php echo check_empty('username'); ?></p>
                <input type="password" name="password" value="" placeholder="Password" class="input">
                <p style="color: red;"><?php echo check_empty('password'); ?></p>
            </div>
            <div class="cokkie">
                <input type="checkbox" name="remember-me" id="remember-me" class="checkbox"><label for="remember-me" class="remember-me">Ghi nhớ đăng nhập</label> <br>
            </div>
            <p style="color: red;"><?php echo check_empty('account'); ?></p>
            <input type="submit" name="btn-login" value="Đăng nhập" class="btn_login">

        </form>
        <a href="" class="lost_password">Quên mật khẩu?</a>
    </div>
</body>

</html>