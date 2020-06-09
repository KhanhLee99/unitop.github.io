<?php

require 'lib/template.php';

if(isset($_FILES['file'])){
    show_array($_FILES);
    $upload_dir = 'uploads/';
    $upload_file = $upload_dir.$_FILES['file']['name'];
    
    $type_allow = array('png', 'jpg', 'gif', 'jpeg');
    $error = array();

    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    if(!in_array(strtolower($type) , $type_allow)){
        $error['type'] = "Anh phai co duoi la png, jpg, gif, jpeg";
    } 
    elseif($_FILES['file']['size'] >29000000){
        $error['size'] = "Size qua tai";
    }
    elseif(file_exists($upload_file)){
        $error['file_exits'] = "File da ton tai tren he thong";
    }
    
    if(empty($error)){
        if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)){
            echo "<a href='$upload_file'>Download: {$upload_file}</a>";
        }
        else{
            echo "Upload file khong thanh cong";
        }
        echo "<img src='{$upload_file}'>";
    }
    else{
        show_array($error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload File len server voi php</title>
</head>
<body>
    <form enctype="multipart/form-data" action="" method="post">
        <input type="file" name="file"> <br> <br>
        <input type="submit" value="Send File">        
    </form>
</body>
</html>