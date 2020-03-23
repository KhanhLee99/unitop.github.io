<?php

function construct() {
    load_model('index');
}

function indexAction() {
    load('helper','format');
    $id = (int)$_GET['id'];
    $list_product = get_list_product_by_cat_id($id);
    $cat = get_cat_by_id($id);
    $data['list_product'] = $list_product;
    $data['cat'] = $cat;
    load_view('index', $data);
}

function detailAction()
{
    load('helper','format');
    $id = (int)$_GET['id'];
    $product = get_product_by_id($id);
    $data['product'] = $product;
    load_view('detail',$data);
}