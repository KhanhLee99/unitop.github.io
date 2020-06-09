<?php

$file_url = 'uploads/2.jpg';

if(@unlink($file_url)){
    echo "Xoa file {$file_url} thanh cong";
}
else{
    echo "Khong ton tai file {$file_url}";
}