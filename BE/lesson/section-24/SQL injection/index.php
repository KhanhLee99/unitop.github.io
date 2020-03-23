<?php
$conn = mysqli_connect('localhost', 'root', '', 'unitop');
if (!$conn) {
    echo "Kết nối thất bại";
} else {
    echo "Kết nối thàng công";
}
if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `tbl_user` WHERE `username` = '".mysqli_real_escape_string($conn,$username)."' AND `password` = '".mysqli_real_escape_string($conn,$password)."'";
 //   $sql = "SELECT * FROM `tbl_user` WHERE `username` = '{$username}' AND `password` = '{$username}' ";
    
    // $username và $password = " ' OR '' = ' "; trường hợp này câu lệnh sql sẽ đúng và ng dùng có thể đăng nhập vào hệ thống
    // sử dụng mysqli_real_escape_string() để chuyển chuỗi dữ liệu nhập vào thành chuỗi dữ liệu an toàn
    echo "<br>" . $sql;
    $result = mysqli_query($conn, $sql);
    $user = array();
    if (mysqli_num_rows($result) > 0) {
        echo "<br>Đăng nhập hợp lệ";
    } else {
        echo "<br>Đăng nhập không hợp lệ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SQL injection</title>
</head>
<style>
    .login {
        width: 300px;
        padding: 10px 20px;
    }

    b {
        text-align: center;
        font-size: 32px;
        display: block;
    }

    label {
        font-size: 19px;
        display: block;
    }

    input {
        width: 100%;
        padding: 4px 0;
        margin: 3px 0;
    }
</style>

<body>
    <div class="login">
        <b>Đăng nhập</b>
        <form action="" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" name="btn_login" value="Đăng nhập">
        </form>
    </div>

</body>

</html>