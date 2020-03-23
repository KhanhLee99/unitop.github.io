<?php
//lấy list sản phẩm của danh mục theo cat_id
function get_cat_product_by_id($id)
{
    global $list_products;
    $result = array();
    if (!empty($list_products)) {
        foreach ($list_products as $item) {
            if (in_array($id, $item)) {
                if ($item['cat_id'] == $id) {
                    $item['url'] = "?mod=product&act=detail&id={$item['id']}";
                    $result[] = $item;
                }
            }
        }
        return $result;
    }
    return false;
}

//Lấy tên danh mục sản phẩm theo cat_id
function get_name_cat($id)
{
    global $list_products_cat;
    if (!empty($list_products_cat)) {
        if (array_key_exists($id, $list_products_cat)) {
            return $list_products_cat[$id]['cat_title'];
        }
    }
    return false;
}

//Lấy sản phẩm theo id
function get_product_by_id($id)
{
    global $list_products;
    if (!empty($list_products)) {
        foreach ($list_products as &$item) {
            if (in_array($id, $item)) {
                if ($item['id'] == $id) {
                    $item['add_cart'] = "?mod=cart&act=add&id={$item['id']}";
                    return $item;
                }
            }
        }
    }
    return false;
}

//Lấy list danh mục product
function get_list_product_cat()
{
    global $list_products_cat;
    if (!empty($list_products_cat)) {
        foreach ($list_products_cat as &$cat) {
            $cat['url_cat'] = "?mod=product&act=main&id={$cat['id']}"; 
        }
        return $list_products_cat;
    }
    return false;
}
