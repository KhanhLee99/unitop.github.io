<?php
function construct(){
    // echo "Dùng chung";
    load_model('index');
}

function indexAction(){
    // echo "Hiển thị danh sách";
    load('helper', 'format');
    $list_user = get_list_user();
    // show_array($list_user);
    $data['list_user'] = $list_user;
    load_view('index', $data);
}

function addAction(){
    echo "Thêm";
}

function editAction(){
    // echo "edit";
    $id = (int)$_GET['id'];
    $user = get_user_by_id($id);
    show_array($user);
}