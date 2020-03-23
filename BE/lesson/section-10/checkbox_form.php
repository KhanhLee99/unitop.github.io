<?php
function show_array($arr) {
    if (is_array($arr)) {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    if(isset($_POST['rules'])){
        show_array($_POST);
    }
    else{
        echo "Hãy đọc điều khoản và xác nhận";
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
            <input type="checkbox" name="rules" value="yes" id="rules">
            <label for="rules">Đồng ý</label>
            <br>
            
            <input type="submit" name="btn_Reg" value="Register">
        </form>
    </body>

</html>
