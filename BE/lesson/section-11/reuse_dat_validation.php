<?php
if(isset($_POST['btn_Reg'])){
    $error = array();
    
    if(empty($_POST['username'])){
        $error['username'] = "Khong dc de trong username";
    }
    else{
        $username= $_POST['username'];
    }
    
    if(empty($_POST['gender'])){
        $error['gender'] = "Khong dc de trong gender";
    }
    else{
        $gender= $_POST['gender'];
    }
    
    if(empty($error)){
        echo "Username: {$username} --- Gender: {$gender}";
    }
}
?>

<html lang="en">
    <head>
        <title> chuan hoa du lieu form </title>
        <meta charset="utf-8">

    </head>
    <body >
        <form action="" method="POST">
            <label for="username">Username</label> <br>
            <input type="text" name="username" id="username" <?php if(isset($_POST['btn_Reg']) && empty($error['username'])) echo "value={$username} "; else{echo "value = ''";}?> /> <br><br>
            <p style="color: red;">  <?php if(!empty($error['username'])) echo $error['username'] ;?></p>
            <label>Gender</label> <br>
            <select name="gender" >
                <label >Gender</label> 
                <option value="">--- Select ---</option>
                <option <?php  if(isset($_POST['btn_Reg']) && empty($error['gender']) && $gender == 'female') echo "selected ='selected'" ?> value="female">Female</option>
                <option <?php if(isset($_POST['btn_Reg']) && empty($error['gender']) && $gender == 'male') echo "selected ='selected'" ?> value="male">Male</option>   

            </select> <br> <br>
           <p style="color: red;"> <?php if(!empty($error['gender'])) echo $error['gender']; ?></p>
            <input type="submit" name="btn_Reg" value="Register">
        </form>
    </body>

</html>


