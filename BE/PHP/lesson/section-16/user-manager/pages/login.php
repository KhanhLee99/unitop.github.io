<?php
if (isset($_POST['btn_login'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "Tên đăng nhập không được để trống";
    } else {
        $patern_username = '/^[A-Za-z0-9_\.]{6,32}$/';
        if (!preg_match($patern_username, $_POST['username'])) {
            $error['username'] = "Tên đăng nhập không đúng định dạng";
        } else {
            $username = $_POST['username'];
        }
    }
    if (empty($_POST['password'])) {
        $error['password'] = "Mật khẩu không được để trống";
    } else {
        $patern_password = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
        if (!preg_match($patern_password, $_POST['password'])) {
            $error['password'] = "Mật khẩu không đúng định dạng";
        } else {
            $password = $_POST['password'];
        }
    }

    if (empty($error)) {
        show_array($list_users);
        if(check_login($username,$password)){        
            if(isset($_POST['remember_me'])){
                setcookie('is_login', true, time() + 3600, '/');
                setcookie('user_login',$username,time() + 3600, '/');
            }
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            
            header('location: ?page=home');
        }
        else{
            $error['account'] = "Tài khoản này không đúng hoặc không tồn tại";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng nhập </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="vendor/bootstrap.js"></script>
    <script type="text/javascript" src="1.js"></script>
    <link rel="stylesheet" href="vendor/bootstrap.css">
    <link rel="stylesheet" href="vendor/font-awesome.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <div class="form_login">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 push-xs-4 text-xs-center login">
                    <h3 class="title_form_login mb-2 mt-3">ĐĂNG NHẬP</h3>
                    <form action="" method="POST">
                        <input type="text" name="username" value="<?php if(isset($_POST['btn_login'])){get_value('username');} ?>" placeholder="Username" class="username mb-1">
                        <p style='color: red;'><?php check_empty('username') ?></p>
                        <input type="password" name="password" value="" placeholder="Password" class="password ">
                        <p style='color: red;'><?php check_empty('password') ?></p>
                        <input type="checkbox" name="remember_me" id="remember_me"><label for="remember_me" style="color: white; padding-left: 8px;">Ghi nhớ đăng nhập</label> 
                        <input type="submit" name="btn_login" value="Đăng nhập" class="btn_login mb-2 mt-1">
                        <p style='color: red;'><?php check_empty('account') ?></p>
                    </form>
                    <a href="" class="pp">Quên mật khẩu?</a>
                </div>
            </div> <!-- het row -->
        </div> <!-- het container -->
    </div> <!-- het form_login -->

</body>

</html>