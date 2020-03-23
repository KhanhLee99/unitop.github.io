<?php
ob_start();
session_start();

if (!isset($_SESSION['is_Register'])) {
    header("location: register.php");
} else {
    echo $_SESSION['username'] . "<br>";
    echo $_SESSION['password'];

    if (isset($_POST['btn_login'])) {
        $error_2 = array();
        #Kiem tra loi nhap username
        if (empty($_POST['username'])) {
            $error_2['username'] = "Username ko dc de trong";
        } else {
            $username = $_POST['username'];
        }
        #Kiem tra loi nhap password
        if (empty($_POST['password'])) {
            $error_2['password'] = "Password ko dc de trong";
        } else {
            $password = $_POST['password'];
        }
        #TH da nhap
        if (empty($error_2)) {
            if ($password == $_SESSION['password'] && $username ==  $_SESSION['username']) {
               
                if(isset($_POST['remember_me'])){
                    setcookie('is_login', true, time() + 3600, '/');
                    setcookie('username',$password, time() + 3600, '/');
                }
                $_SESSION['is_login'] = true;
                header("location: index.php");
            }
            else{
                echo "Account False";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Trang dang nhap</title>
</head>

<body>
    <h1>Dang Nhap</h1>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php if(!empty($username)) echo $username; ?>"> <br>
        <p style="color: red;"><?php if (!empty($error_2['username'])) echo $error_2['username'];  ?></p>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"> <br>
        <p style="color: red;"><?php if (!empty($error_2['password'])) echo $error_2['password'];  ?></p>
        <br>

        <input type="checkbox" name="remember_me" value="true" id="checkbox"><label for="checkbox">Ghi nho dang nhap</label>
        <br><br>
        <input type="submit" name="btn_login" id="" value="Log In">
    </form>
</body>

</html>