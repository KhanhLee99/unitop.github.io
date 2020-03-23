
<?php
$product_id = $_POST['product_id'];
$num_order = $_POST['num_order'];
if (isset($_SESSION['cart']) && array_key_exists($product_id, $_SESSION['cart']['buy'])) {
    $item = get_product_by_id($product_id);
    $price = $item['price'];
    // $price = $_SESSION['cart']['buy'][$product_id];
    $sub_total = $num_order * $price;
    // update [cart][buy]
    $_SESSION['cart']['buy'][$product_id]['qty'] = $num_order;
    $_SESSION['cart']['buy'][$product_id]['sub_total'] = $sub_total;
    // update [cart][info]
    update_info_cart();
    $total_price = get_total_cart();
    $total_num = get_num_order();

    $result = array(
        'sub_total' => currency_format($sub_total),
        'total_price' => currency_format($total_price),
        'total_num' => $total_num
    );
    echo json_encode($result);
    // echo $total_num;
}
