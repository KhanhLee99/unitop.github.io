<?php
require 'lib/template.php';
if(isset($_POST['submit'])){
    // show_array($_FILES);
    // show_array($_POST);
    if(empty($_FILES['image']['name'])){
        $error['name'] = "Error";
    }

    
    // $upload_dir = "upload/";
    // $upload_file = $upload_dir.$_FILES['image']['name'];
    // move_uploaded_file($_FILES['image']['tmp_name'], $upload_file);
    
  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Upload Image</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" value=""> <br> 
        <?php if(!empty($upload_file)){
            echo "<img src='{$upload_file}'>";
        } ?>
        <br>
        <?php if(!empty($error['name'])) echo $error['name'] ?>
        <br>
        <input type="submit" name="submit" value="Send File">
    </form>
</body>

</html>