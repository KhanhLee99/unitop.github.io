<?php


if (isset($_POST['btn_update_cart'])) {
    show_array($_POST);
    update_cart($_POST['quantity_of_product']);
    
    redirect_to("?mod=cart&act=show");
}