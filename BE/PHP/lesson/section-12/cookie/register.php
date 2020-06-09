<?php
ob_start();
session_start();

if(isset($_POST['btn_Reg'])){
    $error_1 =array();
    $paten_username = "/^[A-Za-z0-9_\.]{6,32}$/";
    $paten_password = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if(empty($_POST['username'])){
        $error_1['username'] = "Username ko dc de trong";
    }
    elseif(!preg_match($paten_username, $_POST['username'], $matchs)){
        $error_1['username'] = "Username ko dung dinh dang";
    }
    else{
        $username = $_POST['username'];
    }
    if(empty($_POST['password'])){
        $error_1['password'] = "Password ko dc de trong";
    }
    elseif(!preg_match($paten_password, $_POST['password'], $matchs)){
        $error_1['password'] = "Password ko dung dinh dang";
    }
    else{
        $password = $_POST['password'];
    }

    if(empty($error_1)){    
        $_SESSION['is_Register'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        header("location: login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Trang dang ky</title>
</head>

<body>
    <h1>Dang Ky</h1>
    <form action="" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php if(!empty($username)) echo $username; ?>"> <br>
        <p style="color: red;"><?php if(!empty($error_1['username'])) echo $error_1['username'];  ?></p>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"> <br>
        <p style="color: red;"><?php if(!empty($error_1['password'])) echo $error_1['password'];  ?></p>
        <br>

        <input type="submit" name="btn_Reg" id="" value="Register">
    </form>
</body>

</html>