<?php
function get_list_product_cat()
{
    $list_product_cat = db_fetch_array("SELECT * FROM `tbl_products_cat`");
    return $list_product_cat;
}

function get_list_product_by_cat_id($id)
{
    $list_products_by_cat = db_fetch_array("SELECT * FROM `tbl_products` WHERE `cat_id` = {$id}");
    return $list_products_by_cat;
}
