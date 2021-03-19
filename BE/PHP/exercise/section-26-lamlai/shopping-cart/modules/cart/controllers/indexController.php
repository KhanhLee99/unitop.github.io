<?php

function construct()
{
    //    echo "DÙng chung, load đầu tiên";
    ob_start();
    session_start();
    load('helper', 'format');
    load_model('index');
}

function indexAction()
{
    $list_product_cart = get_list_cart_buy();
    $data['list_product_cart'] = $list_product_cart;
    load_view('index', $data);
}

function addAction()
{
    $id = (int) $_GET['id'];
    $product = get_product_by_id($id);
    add_cart($product);
    header("location: ?mod=cart&controller=index&action=index");
}

function deleteAction()
{
    $id = (int) $_GET['id'];
    unset($_SESSION['cart']['buy'][$id]);
    header("location: ?mod=cart&controller=index&action=index");
}

function deleteAllAction()
{
    unset($_SESSION['cart']);
    header("location: ?mod=cart&controller=index&action=index");
}

function editAction()
{
    if (isset($_POST['btn_update'])) {
        // show_array($_POST);
        update_cart($_POST['qty']);
        header("location: ?mod=cart&controller=index&action=index");
    }
}

function update_ajaxAction(){
    $product_id = (int)$_POST['product_id'];
    $num_order = (int)$_POST['num_order'];
    
    $_SESSION['cart']['buy'][$product_id]['qty'] = $num_order;
    $_SESSION['cart']['buy'][$product_id]['sub_total'] = $num_order * $_SESSION['cart']['buy'][$product_id]['price'];

    update_cart_info();

    $total = $_SESSION['cart']['info']['total'];

    $result = array(
        'total' => currency_format($total,'VNĐ') ,
        'num_order' => $num_order,
        'sub_total' => currency_format($_SESSION['cart']['buy'][$product_id]['sub_total'],'VNĐ')
    );

    echo json_encode($result);
}
