<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction() {
    load('helper','format');
    $list_users = get_list_users();
    $data['list_users'] = $list_users;
    load_view('index', $data);
}

function detailAction(){
    $id= (int) $_GET['id'];
    $user = get_user_by_id($id);
    $data = array('user' => $user);
    load_view('detail',$data);
}