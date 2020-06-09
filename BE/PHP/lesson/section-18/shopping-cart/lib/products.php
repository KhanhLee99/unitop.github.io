<?php
//Lấy danh mục theo cat_id
function get_category_by_id($cat_id)
{
    global $list_products_cat;
    if (array_key_exists($cat_id, $list_products_cat)) {
        $list_products_cat[$cat_id]['url'] = "?mod=product&act=main&cat_id={$cat_id}";
        return $list_products_cat[$cat_id];
    }
    return false;
}

//Lấy danh sách sản phẩm theo cat_id
function get_list_by_cat($cat_id)
{
    global $list_products;
    $result = array();
    if (!empty($list_products)) {
        foreach ($list_products as $product) {
            if ($product['cat_id'] == $cat_id) {
                $product['url'] = "?mod=product&act=detail&id={$product['id']}";
                $result[] = $product;
            }
        }
        return $result;
    }
    return false;
}

//Lấy sản phẩm theo id
function get_product_by_id($id)
{
    global $list_products;
    if (array_key_exists($id, $list_products)) {
        $list_products[$id]['url_add_cart'] = "?mod=cart&act=add&id={$id}";
        $list_products[$id]['url'] = "?mod=product&act=detail&id={$id}";
        return $list_products[$id];
    }
    return false;
}

//Thêm url vào list_products_cat
function get_list_cat()
{
    global $list_products_cat;
    $result = array();
    if (!empty($list_products_cat)) {
        foreach ($list_products_cat as $cat) {
            $cat['url'] = "?mod=product&act=main&cat_id={$cat['id']}";
            $result[] = $cat;
        }
        return $result;
    }
    return false;
}
