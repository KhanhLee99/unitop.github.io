<?php
$id=(int)$_GET['id'];
// $sql = "DELETE FROM `tbl_user` WHERE `user_id` = {$id}";
// if(mysqli_query($conn,$sql)){
//     header("location: ?mod=users&act=main");
// }
db_delete("tbl_user","`user_id` = {$id}");
header("location: ?mod=users&act=main");