<?php

function get_list_products_cat()
{
    $list_products_cat = db_fetch_array("SELECT * FROM `tbl_products_cat`");
    foreach ($list_products_cat as &$cat) {
        $cat['url'] = "?mod=products&controller=index&action=index&id={$cat['id']}";
    }
    return $list_products_cat;
}

function  get_list_product_by_cat_id($id)
{
    $list_product = db_fetch_array("SELECT * FROM `tbl_products` WHERE `cat_id` = {$id}");
    foreach( $list_product as &$item){
        $item['url'] = "?mod=products&controller=index&action=detail&id={$item['id']}";
    }
    return $list_product;
}
