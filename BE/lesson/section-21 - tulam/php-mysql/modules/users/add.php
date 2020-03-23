<?php
get_header();
?>
<?php
if(isset($_POST['btn_reg'])){
    $error = array();
    $alert = array();
    //fullname
    if(empty($_POST['fullname'])){
        $error['fullname'] = "Không được để trống fullname";
    }
    else{
        $fullname = $_POST['fullname'];
    }
    //username
    if(empty($_POST['username'])){
        $error['username'] = "Không được để trống username";
    }
    else{
        $username = $_POST['username'];
    }
    //password
    if(empty($_POST['password'])){
        $error['password'] = "Không được để trống password";
    }
    else{
        $password = $_POST['password'];
        $password_new = md5($password);
    }
    //email
    if(empty($_POST['email'])){
        $error['email'] = "Không được để trống email";
    }
    else{
        $email = $_POST['email'];
    }
    //gender
    if(empty($_POST['gender'])){
        $error['gender'] = "Không được để trống email";
    }
    else{
        $gender = $_POST['gender'];
    }
    //Kết luận
    if(empty($error)){
        $sql = "INSERT INTO `tbl_user` (`fullname` , `username` , `password` , `email`, `gender` ) VALUES ('{$fullname}','{$username}','{$password_new}','{$email}','{$gender}')";
        if(mysqli_query($conn,$sql)){
            $alert['success'] =  "Đã thêm dữ liệu thành công";
        }
        else{
            echo "Lỗi: ".mysqli_error($conn);
        }
    }
}
?>
<style>
.register{
    width: 330px;
    padding: 0 70px;
    background: #202123;
    margin: 3px auto;
    border-radius: 2px; 
}
input.fullname, input.username, input.password, input.email{
    width: 100%;
    padding-bottom: 9px;
    border: none;
    background: #202123;
    border-bottom: 5px solid white;
    margin-bottom: 22px;
    font-size: 14px;
    color: white;
    padding-left: 13px;
}
input.button{
    width: 100%;
    padding: 11px 0;
    font-size: 16px;
    background: #3970B0;
    color: white;
    border:none;
    border-radius: 3px;
    margin-bottom: 45px;
}
h1{
    color: white;
    font-size: 59px;
    padding: 14px 0;
    font-weight: 500;
}
.gender{
    width: 100%;
    padding: 4px 0;
    margin-bottom: 22px;
    background: #202123;
    color: white;
    font-size: 14px;
}
</style>
<div class="content">
    <div class="register">
        <h1>Đăng kí</h1>
        <?php if(!empty($alert)) echo "<p style='color: #9CDCFE; padding-bottom: 10px;'>{$alert['success']}</p>" ?>
        <form action="" method="POST">
            <!-- <label for="fullname">Họ tên</label> -->
            <input type="text" name="fullname" class="fullname" id="fullname" value="<?php if(isset($_POST['btn_reg'])){echo get_value('fullname');} ?>" placeholder="Fullname">
            <p style="color: red; margin-bottom: 18px;"><?php if(isset($_POST['btn_reg'])){echo check_empty('fullname');} ?></p>
            <!-- <label for="username">Tên đăng nhập</label> -->
            <input type="text" name="username" class="username" id="username" value="<?php if(isset($_POST['btn_reg'])){echo get_value('username');} ?>" placeholder="Username">
            <p style="color: red; margin-bottom: 18px;"><?php if(isset($_POST['btn_reg'])){echo check_empty('username');} ?></p>
            <!-- <label for="password">Mật khẩu</label> -->
            <input type="password" name="password" class="password"  id="password" value="" placeholder="Password">
            <p style="color: red; margin-bottom: 18px;"><?php if(isset($_POST['btn_reg'])){echo check_empty('password');} ?></p>
            <!-- <label for="email">Email</label> -->
            <input type="text" name="email" class="email"  id="email" value="<?php if(isset($_POST['btn_reg'])){echo get_value('email');} ?>" placeholder="Email">
            <p style="color: red; margin-bottom: 18px;"><?php if(isset($_POST['btn_reg'])){echo check_empty('email');} ?></p>
            <select name="gender" class="gender">
                <option value="">--------- Giới tính ---------</option>
                <option value="male">Nam</option>
                <option value="female">Nữ</option>
            </select>
            <input type="submit" name="btn_reg" class="button" value="Đăng kí">
        </form>
     </div> <!--het register -->
</div> <!--het content -->
<?php
get_footer();
?>