<?php

function get_list_product_by_cat_id($id) {
    $list_product = db_fetch_array("SELECT * FROM `tbl_products` WHERE `cat_id` = {$id}");
    foreach( $list_product as &$item){
        $item['url'] = "?mod=products&controller=index&action=detail&id={$item['id']}";
    }
    return $list_product;
}

function get_cat_by_id($id){
    $item = db_fetch_row("SELECT * FROM `tbl_products_cat` WHERE `id` = {$id}");
    return $item;
}

function get_product_by_id($id){
    $item = db_fetch_row("SELECT * FROM `tbl_products` WHERE `id` = {$id}");
    $item['url_add_cart'] = "?mod=cart&controller=index&action=add&id={$id}";
    return $item;
}