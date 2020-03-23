<?php

require 'lib/validation.php';

if(isset($_POST['btn_Reg'])){
    $error = array(); //PHAT CO
    $username ='';
    $patern_pw = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    $patern_us = "/^[A-Za-z0-9.\_]{6,32}$/";
    
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
    
    if(!empty($error)){
//        echo "<pre>";
//        print_r($error);
//        echo "</pre>";
    }
    else{
        echo "username: {$username} - password: {$password}";
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
            <br>
            
            <input type="submit" name="btn_Reg" value="Register">
        </form>
    </body>

</html>