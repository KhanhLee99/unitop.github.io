<?php

require 'lib/validation.php';

if(isset($_POST['btn_Reg'])){
    $error = array(); //PHAT CO
 //   $patern_pw = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
 //   $patern_us = "/^[A-Za-z0-9.\_]{6,32}$/";
    
    if(empty($_POST['fullname'])){
        $error['fullname'] = "Ko dc de trong fullname"; //HA CO
    }
//    elseif (!is_fullname($_POST['fullname'])) {
//    $error['fullname'] = "Sai dinh dang roi kia cu";
//}
    else{
        $fullname = $_POST['fullname']; 
    }
    
    if(empty($_POST['username'])){
        $error['username'] = "Ko dc de trong username"; //HA CO
    }
    elseif (!is_username($_POST['username'])) {
    $error['username'] = "Sai dinh dang roi kia cu";
}
    else{
        $username = $_POST['username']; 
    }
    
    if(empty($_POST['password'])){
        $error['password'] = "Ko dc de trong password"; //HA CO
    }
    elseif (!is_password($_POST['password'])) {
    $error['password'] = "Sai dinh dang roi kia cu";
}
    else{
        $password = $_POST['password'];
    }
    
    if(empty($_POST['phone'])){
        $error['phone'] = "Ko dc de trong phone"; //HA CO
    }
    elseif (!is_phone($_POST['phone'])) {
    $error['phone'] = "Sai dinh dang roi kia cu";
}
    else{
        $phone = $_POST['phone']; 
    }
    
    if(!empty($error)){
//        echo "<pre>";
//        print_r($error);
//        echo "</pre>";
    }
    else{
        echo "username: {$username} - password: {$password} - {$fullname} - {$phone}";
    }
}

?>

<html lang="en">
    <head>
        <title> Checkbox Form </title>
        <meta charset="utf-8">

    </head>
    <body >
        <form action="" method="POST">
            <label for="fullname">Fullname</label>
            <input type="text" name="fullname" id="fullname" value = "<?php echo get_value('fullname'); ?>">
            <br>
            <p style="color: red;"> <?php echo form_error('fullname'); ?> </p>
            <br>    
            
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value = "<?php echo get_value('username'); ?>">
            <br>
            <p style="color: red;"> <?php echo form_error('username'); ?> </p>
            <br>    
            
            <label for="password">Password</label>
            <input type="password" name="password"  id="password">            
            <br>
            <p style="color: red;"> <?php echo form_error('password'); ?> </p>
            <br>
            
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" value = "<?php echo get_value('phone'); ?>">
            <br>
            <p style="color: red;"> <?php echo form_error('phone'); ?> </p>
            <br>    
            <br>
            
            <input type="submit" name="btn_Reg" value="Register">
        </form>
    </body>

</html>