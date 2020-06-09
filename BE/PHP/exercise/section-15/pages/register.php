<?php
ob_start();
session_start();
if (isset($_POST['btn_register'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống username";
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống password";
    } else {
        $password = $_POST['password'];
    }
    if (empty($error)) {
        $_SESSION['is_register'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        header('location: ?page=login');
    }
}
?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-xs-center">
                <h1 class="display-3 mb-2">THIS IS REGISTER</h1>
            </div>
            <div class="col-xs-6 push-xs-4">
                <form action="" method="post">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="userame"> <br>
                    <p style="color: red;"><?php if (!empty($error['username'])) echo $error['username']; ?></p>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"> <br>
                    <p style="color: red;"><?php if (!empty($error['password'])) echo $error['password']; ?></p>
                    <input type="submit" name="btn_register" value="Đăng Kí">
                </form>
            </div>
        </div>
    </div>


</div> <!-- het content -->