<?php

function construct(){
    ob_start();
    session_start();
    load_model('index');
}

function indexAction(){
    load('helper','format');
    $list_cart_buy = get_list_cart_buy();  
    $num_order = get_num_order();
    $total = get_total();
    $data['list_cart_buy'] = $list_cart_buy;
    $data['num_order'] = $num_order;
    $data['total'] = $total;
    load_view('index', $data);
}

function addAction(){
    
    $id = (int)$_GET['id'];
    add_cart($id);
    header("location: ?mod=cart&controller=index&action=index");    
}

function updateAction(){
    if(isset($_POST['btn_update'])){
        update_cart($_POST['qty']);
        header("location: ?mod=cart&controller=index&action=index");    
    }
}

function update_ajaxAction(){
    load('helper','format');
    $num_order = (int)$_POST['num_order'];
    $product_id = (int)$_POST['product_id'];
    $price = $_SESSION['cart']['buy'][$product_id]['price'];
    
    $sub_total = $num_order * $price;
    $_SESSION['cart']['buy'][$product_id]['sub_total'] = $sub_total;
    $_SESSION['cart']['buy'][$product_id]['qty'] = $num_order;

    update_info_cart(); 
    $total = $_SESSION['cart']['info']['total'];

    $result = array(
        'num_order' => $num_order,
        'sub_total' => currency_format($sub_total),
        'total' => currency_format($total),
    );
    
    echo json_encode($result);
}

function deleteAction(){
    $id = (int)$_GET['id'];
    delete_cart($id);
    header("location: ?mod=cart&controller=index&action=index");    
}

function delete_cartAction(){
    delete_cart();
    header("location: ?mod=cart&controller=index&action=index");    
}
