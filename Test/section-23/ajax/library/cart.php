<?php

function add_cart($product_id) {
    $item = get_product_by_id($product_id);
    show_array($item);
    $quantity = 1;

    if (isset($_SESSION['cart']) && array_key_exists($product_id, $_SESSION['cart']['buy'])) {
        $quantity = $_SESSION['cart']['buy'][$product_id]['product_quantity'] + 1;
    }

    $_SESSION['cart']['buy'][$product_id] = array(
        'product_id' => $item['product_id'],
        'product_title' => $item['product_title'],
        'product_price' => $item['product_price'],
        'product_code' => $item['product_code'],
        'product_url' => $item['product_url'],
        'product_thumbnail' => $item['product_thumbnail'],
        'product_quantity' => $quantity,
        'sub_total' => $item['product_price'] * $quantity,
    );
    update_info_cart();
}

function update_info_cart() {

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

function get_list_buy_cart() {
    if (isset($_SESSION['cart']['buy'])) {
        foreach ($_SESSION['cart']['buy'] as &$item) {
            $item['url_delete_cart'] = "?mod=cart&act=delete&id={$item['product_id']}";
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
}

function get_total_cart() {
    if (isset($_SESSION['cart']['info'])) {
        return $_SESSION['cart']['info']['total'];
    }
    return false;
}

function get_num_oder() {
    if (isset($_SESSION['cart']['info'])) {
        return $_SESSION['cart']['info']['num_oder'];
    }
    return false;
}

function delete_cart($product_id = '') {
    if (empty($product_id)) {
        unset($_SESSION['cart']['buy']);
        update_info_cart();
    } else {
        unset($_SESSION['cart']['buy'][$product_id]);
        update_info_cart();
    }
}

function update_cart($quantity_of_product) {
    foreach ($quantity_of_product as $id => $new_quantity) {
        $_SESSION['cart']['buy'][$id]['product_quantity'] = $new_quantity;
        $_SESSION['cart']['buy'][$id]['sub_total'] = $new_quantity * $_SESSION['cart']['buy'][$id]['product_price'];
    }
    update_info_cart();
}

function form_email_cart() {
    $body = "";
    $total = currency_format($_SESSION['cart']['info']['total']);
    if (!empty($_SESSION)) {
        foreach ($_SESSION['cart']['buy'] as $item) {
            $product_url = $item['product_url'];
            $product_thumbnail = $item['product_thumbnail'];
            $product_title = $item['product_title'];
            $product_price = currency_format($item['product_price']);
            $product_quantity = $item['product_quantity'];
            $body.= "
            <tr>
                <td><a href='{$product_url}' title='' class='thumb'><img src='{$product_thumbnail}' alt=''></a></td>
                <td><a href='{$product_url}' title='' class='name-product'>{$product_title}</a></td>
                <td>{$product_price}</td>
                <td>{$product_quantity}</td>
            </tr>
            ";
        }
    }
    return "
    <table>
        <thead>
            <tr>
                <td>Ảnh sản phẩm</td>
                <td>Tên sản phẩm</td>
                <td>Giá sản phẩm</td>
                <td>Số lượng</td>
            </tr>
        </thead>
        <tbody>
            {$body}
        </tbody>
    </table>
    <p>Thành tiền : <strong>{$total}</strong></p> 
    ";
}

function finish_oder() {
    unset($_SESSION['cart']);
    update_info_cart();
}

function receive_oder(){
    if (isset($_SESSION['cart'])) {
        # Lấy thông tin, xắp sếp thông tin đơn hàng
        $customer_fullname = $_SESSION['cart']['customer_info']['name'];
        $customer_email = $_SESSION['cart']['customer_info']['email'];
        $customer_address = $_SESSION['cart']['customer_info']['address'];
        $customer_telephone_number = $_SESSION['cart']['customer_info']['telephone_number'];
        $customer_note = $_SESSION['cart']['customer_info']['note'];
        $payment_method = $_SESSION['cart']['customer_info']['payment_method'];
        $oder_code = rand();
        $subject = "[Unitop store] Shopping - Xác nhận đơn hàng {$oder_code}";
        $form_email_cart = form_email_cart();
        $content = "Cảm ơn khách hàng {$customer_fullname} đã đặt hàng từ cửa hàng chúng tôi. Đây là Email thông báo quy trình đặt hàng đã hoàn tất. Dưới đây là các mặt hàng quý khách đã đặt mua: </br></br>" . $form_email_cart;
        # Gửi mail xác nhận đơn hàng cho khách
        send_mail($customer_email, $customer_fullname, $subject, $content);
    
        # Gửi mail báo cáo thông tin đơn hàng 
        global $config_email;
        $my_email = $config_email['username'];
        $content = "Nhận đơn hàng {$oder_code} từ khách hàng {$customer_fullname} gồm" . $form_email_cart . "<p>Địa chỉ: <strong>{$customer_address}</strong></p><p>Số điện thoại của khách hàng: <strong>{$customer_telephone_number}</strong></p><p>Chú thích: <strong>{$customer_note}</strong></p><p>Phương thức thanh toán: <strong>{$payment_method}</strong></p>";
        send_mail($my_email, "", $subject, $content);
        finish_oder();
    }
}


