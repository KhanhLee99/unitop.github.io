<?php

require 'lib/template.php';

if(isset($_FILES['file'])){
    show_array($_FILES);

    $upload_dir = 'uploads/';
    $upload_file = $upload_dir.$_FILES['file']['name'];
    
    if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)){
        echo "<a href='$upload_file'>Download: {$upload_file}</a>";
    }
    else{
        echo "Upload file khong thanh cong";
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