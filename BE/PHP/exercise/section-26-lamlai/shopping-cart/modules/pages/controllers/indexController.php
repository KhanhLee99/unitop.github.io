<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction() {
    $id = (int) $_GET['id'];
    $page = get_page_by_id($id);
    $data['page'] = $page;
    load_view('index', $data);
}

