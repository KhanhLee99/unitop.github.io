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
                <input type="text" name="username" value="" placeholder="Username" class="input"> <br>
                <input type="password" name="password" value="" placeholder="Password" class="input"> <br>
            </div>
            <div class="cokkie">
                <input type="checkbox" name="remember-me" id="remember-me" class="checkbox"><label for="remember-me" class="remember-me">Ghi nhớ đăng nhập</label> <br>
            </div>
            <input type="submit" name="btn-login" value="Đăng nhập" class="btn_login">

        </form>
        <a href="" class="lost_password">Quên mật khẩu?</a>
    </div>
</body>

</html>