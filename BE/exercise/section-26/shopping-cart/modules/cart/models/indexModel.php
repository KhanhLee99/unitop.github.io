<?php

use function GuzzleHttp\Psr7\_caseless_remove;

function get_product_by_id($id)
{
    $item = db_fetch_row("SELECT * FROM `tbl_products` WHERE `id` = {$id}");
    $item['url_add_cart'] = "?mod=cart&controller=index&action=add&id={$id}";
    return $item;
}

function update_info_cart()
{
    $num_order = 0;
    $total = 0;
    foreach($_SESSION['cart']['buy'] as $item){
        $num_order += $item['qty'];
        $total += $item['sub_total'];  
    }

    $_SESSION['cart']['info'] = array(
        'num_order' => $num_order,
        'total' => $total,
    );
}

function add_cart($id)
{
    $item = get_product_by_id($id);
    $qty = 1;
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['id'],
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'qty' => $qty,
        'product_thumb' => $item['product_thumb'],
        'code' => $item['code'],
        'sub_total' => $qty * $item['price'],
    );

    update_info_cart();
}

function get_list_cart_buy(){
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart']['buy'] as &$item){
            $item['url_delete_cart'] = "?mod=cart&controller=index&action=delete&id={$item['id']}";
        }
        return $_SESSION['cart']['buy'];
    }
    return false;   
}

function delete_cart($id = ''){
    if(isset($_SESSION['cart'])){
        if(!empty($id)){
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        }
        else{
            unset($_SESSION['cart']);
        }
    }
    return false;
}

function get_num_order(){
    if(isset($_SESSION['cart'])){
        $num_order = $_SESSION['cart']['info']['num_order'];
        return $num_order;
    }
}

function get_total(){
    if(isset($_SESSION['cart'])){
        $total = $_SESSION['cart']['info']['total'];
        return $total;
    }
}

function update_cart($qty){
    if(is_array($qty)){
        foreach($qty as $id => $new_qty){
            $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
            $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty * $_SESSION['cart']['buy'][$id]['price'];
        }
        update_info_cart();
    }
}