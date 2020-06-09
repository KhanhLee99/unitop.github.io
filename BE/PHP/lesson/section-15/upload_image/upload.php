<?php

require 'lib/template.php';

show_array($_FILES);

$upload_dir = 'uploads/';
$upload_file = $upload_dir.$_FILES['file']['name'];

if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)){
    echo "<a href='$upload_file'>Download: {$upload_file}</a>";
}
else{
    echo "Upload file khong thanh cong";
}

?>