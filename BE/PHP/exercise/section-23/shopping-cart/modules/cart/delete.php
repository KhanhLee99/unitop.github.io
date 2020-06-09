<?php
$id = (int)$_GET['id'];
delete_cart($id);

header("location: ?mod=cart&act=show");
?>