<?php


if(isset($_POST['btn_Reg'])){
    $error = array(); //PHAT CO
    if(empty($_POST['username'])){
        $error['username'] = "Ko dc de trong username"; //HA CO
    }
    else{
        $username = $_POST['username']; 
    }
    
    if(empty($_POST['password'])){
        $error['password'] = "Ko dc de trong password"; //HA CO
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
            <input type="text" name="username" id="username">
            <br>
            <p style="color: red;"> <?php if(!empty($error['username'])) echo $error['username']; ?> </p>
            <br>    
            
            <label for="password">Password</label>
            <input type="password" name="password"  id="password">            
            <br>
            <p style="color: red;"> <?php if(!empty($error['password'])) echo $error['password']; ?> </p>
            <br>
            <br>
            
            <input type="submit" name="btn_Reg" value="Register">
        </form>
    </body>

</html>