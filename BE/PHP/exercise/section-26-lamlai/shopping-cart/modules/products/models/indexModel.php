<?php

function get_product_by_id($id)
{
    return db_fetch_row("SELECT * FROM `tbl_products` WHERE `id` = {$id}");
}

function get_list_product_by_id_cat($id)
{
    $list_product = db_fetch_array("SELECT * FROM `tbl_products` WHERE `cat_id` = {$id}");
    return $list_product;
}

function get_cat_by_cat_id($id){
return db_fetch_row("SELECT * FROM `tbl_products_cat` WHERE `id` = {$id}");
}