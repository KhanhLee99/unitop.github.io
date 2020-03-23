<?php

$product_id = (int) $_GET['id'];
delete_cart($product_id);
redirect_to("?mod=cart&act=show");
