<?php

function show_array($arr) {
    if (is_array($arr)) {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}
if(isset($_POST['btn_Reg'])){
    show_array($_POST);
    $show_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ'
    );
    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
      echo $show_gender[$gender];  
    }
    else{
        echo "Ban chua chon gioi tinh";
    }
}
?>
<html lang="en">
    <head>
        <title> Radio button Form </title>
        <meta charset="utf-8">

    </head>
    <body >
        <form action="" method="POST">
            <input type="radio" name="gender" value="male" checked="checked" id="male">
            <label for="male">Nam</label>
            <br>
            <input type="radio" name="gender" value="female" id = "female">
            <label for="female">Nữ</label>
            <br>
            <input type="submit" name="btn_Reg" value="Register">
        </form>
    </body>

</html>
