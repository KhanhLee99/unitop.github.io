<?php
    if(isset($_POST['btn_Reg'])){
        print_r($_POST);
        
        if(!empty($_POST['cat'])){
            #cach1
            foreach($_POST['cat'] as $item){
                echo $item."<br>";
            }
            
            #cach2
            $list_cat = implode(' - ', $_POST['cat']);
            echo $list_cat;
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
            <input type="checkbox" name="cat[]" value="1" id="cat_1">
            <label for="cat_1">Thể thao</label>
            <br>
            <input type="checkbox" name="cat[]" value="2" id="cat_2">
            <label for="cat_2">Xã hội</label>
            <br>
            
            <input type="submit" name="btn_Reg" value="Register">
        </form>
    </body>

</html>

