<?php
// show_array($_POST);
if (isset($_POST['btn_update_cart'])) {
    $qty = $_POST['qty'];
    update_cart($qty);
    //redirect("?mod=cart&act=show");
}
