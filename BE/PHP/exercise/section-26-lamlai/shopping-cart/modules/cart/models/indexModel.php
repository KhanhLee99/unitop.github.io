<?php
function get_list_cart_buy()
{
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart']['buy'])) {
        return $_SESSION['cart']['buy'];
    }
    return false;
}

function get_product_by_id($id)
{
    return db_fetch_row("SELECT * FROM `tbl_products` WHERE `id` = {$id}");
}

function update_cart_info()
{
    $num_order = 0;
    $total = 0;
    foreach ($_SESSION['cart']['buy'] as $product) {
        $num_order += $product['qty'];
        $total += $product['sub_total'];
    }

    $_SESSION['cart']['info'] = array(
        'num_order' => $num_order,
        'total' => $total,
    );
}

function add_cart($product)
{
    $qty = 1;
    if (isset($_SESSION['cart']) && array_key_exists($product['id'], $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$product['id']]['qty'] + 1;
    }
    $_SESSION['cart']['buy'][$product['id']] = array(
        'id' => $product['id'],
        'product_title' => $product['product_title'],
        'price' => $product['price'],
        'qty' => $qty,
        'product_thumb' => $product['product_thumb'],
        'code' => $product['code'],
        'sub_total' => $product['price'] * $qty,
    );

    update_cart_info();
}

function update_cart($qty){
    if(is_array($qty)){
        foreach($qty as $id => $new_qty){
            $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
            $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty * $_SESSION['cart']['buy'][$id]['price'];
        }
        update_cart_info();
    }
}