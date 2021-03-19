<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
    load('helper','format');
}

function indexAction() {
    $id = (int) $_GET['id'];
    $cat = get_cat_by_cat_id($id);
    $list_product = get_list_product_by_id_cat($id);
    $data['list_product'] = $list_product;
    $data['cat'] = $cat;
    load_view('index', $data);
}

function detailAction(){
    $id = (int) $_GET['id'];
    $product = get_product_by_id($id);
    $data['product'] = $product;
    load_view('detail', $data);
}