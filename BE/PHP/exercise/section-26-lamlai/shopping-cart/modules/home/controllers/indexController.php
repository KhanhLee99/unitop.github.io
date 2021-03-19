<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load('helper','format');
    load_model('index');
}

function indexAction() {
    $list_product_cat = get_list_product_cat();
    $list_products = array();
    foreach($list_product_cat as $cat){
        $list_products_by_cat = get_list_product_by_cat_id($cat['id']);
        $list_products[$cat['id']] = $list_products_by_cat;
    }
    $data = array(
        'list_product_cat' => $list_product_cat,
        'list_products' => $list_products,
    );
    load_view('index', $data);
}

