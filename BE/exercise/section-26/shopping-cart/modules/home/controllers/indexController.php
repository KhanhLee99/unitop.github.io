<?php
function construct(){
    load_model('index');
}

function indexAction(){
    load('helper', 'format');
    $list_products_cat = get_list_products_cat();
    
    // $list_product = get_list_product_by_cat_id($id);
    foreach($list_products_cat as $cat){
        $list_product[$cat['id']] = get_list_product_by_cat_id($cat['id']);
    }
    $data['list_products_cat'] = $list_products_cat;
    $data['list_product'] = $list_product;
    load_view('index', $data);
}   