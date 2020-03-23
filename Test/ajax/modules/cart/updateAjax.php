<?php
$product_id = $_POST['product_id'];
$num_order = $_POST['num_order'];
$price = $_SESSION['cart']['buy'][$product_id]['price'];
$sub_total = $price * $num_order;
//Câp nhật mang [cart][buy]
$_SESSION['cart']['buy'][$product_id]['qty'] = $num_order;
$_SESSION['cart']['buy'][$product_id]['sub_total'] = $sub_total;
update_info_cat();
//Lấy tổng tiền
$total = $_SESSION['cart']['info']['total'];
$num_order_cart = $_SESSION['cart']['info']['num_order'];
$result = array(
    'sub_total' => currency_format($sub_total),
    'total' => currency_format($total),
    'num_order_cart' => $num_order_cart,
);
echo json_encode($result);

