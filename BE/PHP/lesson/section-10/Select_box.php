<?php
if(isset($_POST['btn_Reg'])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    if(empty($_POST['pay'])){
        echo "Hãy chọn hình thức thanh toán";
    }
    else{
        echo $_POST['pay'];
    }
}
?>

<html lang="en">
    <head>
        <title> List Checkbox Form </title>
        <meta charset="utf-8">

    </head>
    <body >
        <form action="" method="POST">
        <select name="pay" >
            <option value="">--Select--</option>
            <option value="cod">Thanh toán tại nhà</option>
             <option value="banking">Thanh toán trực tuyến</option>   
             <input type="submit" name="btn_Reg" value="Register">
        </select>
        </form>
    </body>

</html>
