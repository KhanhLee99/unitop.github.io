<?php

function get_info_cat($cat_id) {
    global $list_product_cat;
    if (array_key_exists($cat_id, $list_product_cat)) {
        $list_product_cat[$cat_id]['cat_url'] = "?mod=product&act=main&cat_id={$cat_id}";
        return $list_product_cat[$cat_id];
    }
    return false;
}

function get_list_product_by_cat_id($cat_id) {
    global $list_product;
    $list_product_by_cat_id = array();
    foreach ($list_product as $item) {
        if ($item['product_cat_id'] == $cat_id) {
            $item['product_url'] = "?mod=product&act=detail&id={$item['product_id']}";
            $list_product_by_cat_id[] = $item;
        }
    }
    return $list_product_by_cat_id;
}

function get_product_by_id($id) {
    global $list_product;
    if (array_key_exists($id, $list_product)) {
        $list_product[$id]['add_cart_url'] = "?mod=cart&act=add&id={$id}";
        $list_product[$id]['product_url'] = "?mod=product&act=detail&id={$id}";
        return $list_product[$id];
    }
    return false;
}
