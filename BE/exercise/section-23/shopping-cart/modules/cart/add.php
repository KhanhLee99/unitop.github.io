<?php
$id = (int)$_GET['id'];
add_cart($id);

header('location: ?mod=cart&act=show');



