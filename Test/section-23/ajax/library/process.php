<?php
session_start();
ob_start();

function update_info_cart(){
    if (!empty($_SESSION['cart'])) {
        $num_oder = 0;
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $item) {
            $num_oder += $item['product_quantity'];
            $total += $item['sub_total'];
        }

        $_SESSION['cart']['info'] = array(
            'num_oder' => $num_oder,
            'total' => $total,
        );
    }
}

/*
Checklist 
B1 : Lấy thông tin sản phẩm từ ajax  id + num_order + product_price + tạo chuỗi selector trả về
B2 : Tính sub_total
B3 : Cập nhật giỏ hàng với dữ liệu mới theo ID sản phẩm
B4 : Lấy thông tin giỏ hàng từ cart-info
B5 : Trả kết quả về ajax + xuất HTML
*/


if(isset($_POST['active_ajax'])){

    $product_id = (int)$_POST['product_id'];
    $num_order = (int)$_POST['num_order'];
    $product_price = $_SESSION['cart']['buy'][$product_id]['product_price'];
    $str_selector = "tr[title='{$product_id}']";
    // $str_price = explode(",",trim($_POST['price'],"VNĐ"));
    // $price = floatval(join("",$str_price));

    $sub_total = $product_price * $num_order;


    $_SESSION['cart']['buy'][$product_id]['product_quantity'] = $num_order;
    $_SESSION['cart']['buy'][$product_id]['sub_total'] = $sub_total;
    update_info_cart();

    $cart_num_order = $_SESSION['cart']['info']['num_oder'];
    $total = $_SESSION['cart']['info']['total'];
    

    $result = array(
        'product_id' => $product_id,
        'num_order' => $num_order,
        'product_price' => $product_price,
        'sub_total' => number_format($sub_total)." VNĐ",
        'str_selector' => $str_selector,
        'cart_num_order' => $cart_num_order,
        'total' => number_format($total)." VNĐ",
    );
    
    echo json_encode($result);
}










