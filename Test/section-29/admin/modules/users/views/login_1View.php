<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Trang đăng nhập tạo admin mới</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="public/css/login_1.css">
</head>

<body>
    <div class="block">
        <div class="about">
            <div class="chu">
                <h3 class="logo">I8MART</h3>
                <b>Welcome to ismart</b>
                <p>Đây là trang login dành cho người có quyền truy cập <br> Ai không có quyền vui lòng không cố ý đăng nhập vào</p>
            </div>

        </div>
        <div class="form_login">
            <div class="form">
                <p class="login">Login</p>
                <form action="" method="POST">
                    <input class="form-control" type="text" name="username" placeholder="User Name" value="<?php echo get_value('username') ?>">
                    <?php echo form_error('username') ?>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                    <?php echo form_error('password') ?>
                    <input class="form-submit" type="submit" name="btn_login_1" value="Login">
                    <?php echo form_error('account') ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>