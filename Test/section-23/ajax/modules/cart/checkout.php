<?php
get_header();
?>

<?php
$list_buy = get_list_buy_cart();
if (isset($_POST['checkout'])) {
    $error = array();
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Không được để trống Họ và Tên";
    } else {
        $fullname = $_POST['fullname'];
    }
    if (empty($_POST['email'])) {
        $error['email'] = "Không được để trống email";
    } else {
        $email = $_POST['email'];
    }
    if (empty($_POST['address'])) {
        $error['address'] = "Không được để trống địa chỉ";
    } else {
        $address = $_POST['address'];
    }
    if (empty($_POST['tel'])) {
        $error['tel'] = "Không được để trống số điện thoại";
    } else {
        if (!is_phone_number($_POST['tel'])) {
            $error['tel'] = "Số điện thoại không đúng định dạng";
        } else {
            $tel = $_POST['tel'];
        }
    }
    if (empty($_POST['payment-method'])) {
        $error['payment-method'] = "Phải chọn phương thức thanh toán";
    } else {
        $payment_method = $_POST['payment-method'];
    }
    $note = $_POST['note'];


    if (!empty($error)) {
        
    } else {
        $_SESSION['cart']['customer_info'] = array(
            'name' => $fullname,
            'email' => $email,
            'address' => $address,
            'telephone_number' => $tel,
            'note' => $note,
            'payment_method' => $payment_method,
        );
        redirect_to("?mod=cart&act=thanks");
    }
}
?>
<div id="main-content-wp" class="checkout-page">
    <div class="wp-inner clearfix">
        <?php
        get_sidebar();
        ?>
        <div id="content" class="fl-right">
            <div class="section" id="checkout-wp">
                <div class="section-head">
                    <h3 class="section-title">Thanh toán</h3>
                </div>
                <div class="section-detail">
                    <div class="wrap clearfix">
                        <form method="POST" action="">
                            <div id="custom-info-wp" class="fl-left">
                                <h3 class="title">Thông tin khách hàng</h3>
                                <div class="detail">
                                    <div class="field-wp">
                                        <label>Họ tên</label>
                                        <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname'); ?>">
                                        <?php echo form_error('fullname') ?>
                                    </div>
                                    <div class="field-wp">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email" value="<?php echo set_value('email'); ?>">
                                        <?php echo form_error('email') ?>
                                    </div>
                                    <div class="field-wp">
                                        <label>Địa chỉ nhận hàng</label>
                                        <input type="text" name="address" id="address" value="<?php echo set_value('address'); ?>">
                                        <?php echo form_error('address') ?>
                                    </div>
                                    <div class="field-wp">
                                        <label>Số điện thoại</label>
                                        <input type="tel" name="tel" id="tel" value="<?php echo set_value('tel'); ?>">
                                        <?php echo form_error('tel') ?>
                                    </div>
                                    <div class="field-full-wp">
                                        <label>Ghi chú</label>
                                        <textarea name="note"></textarea>
                                    </div>

                                </div>
                            </div>
                            <div id="order-review-wp" class="fl-right">
                                <h3 class="title">Thông tin đơn hàng</h3>
                                <div class="detail">
                                    <table class="shop-table">
                                        <thead>
                                            <tr>
                                                <td>Sản phẩm (<?php echo $num_oder = get_num_oder(); ?>)</td>
                                                <td>Tổng</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($list_buy as $item) {
                                                ?>
                                                <tr class="cart-item">
                                                    <td class="product-name"><?php echo $item['product_title'] ?><strong class="product-quantity">x <?php echo $item['product_quantity'] ?></strong></td>
                                                    <td class="product-total"><?php echo currency_format($item['product_price']) ?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr class="order-total">
                                                <td>Tổng đơn hàng:</td>
                                                <td><strong class="total-price"><?php echo currency_format(get_total_cart()); ?></strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div id="payment-checkout-wp">
                                        <ul id="payment_methods">
                                            <li>
                                                <input type="radio" id="direct-payment" name="payment-method" value="direct-payment">
                                                <label for="direct-payment">Thanh toán COD</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="payment-home" name="payment-method" value="payment-home">
                                                <label for="payment-home">Thanh toán online</label>
                                                <?php echo form_error('payment-method') ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="place-order-wp clearfix">
                                        <button type="submit" name="checkout">Đặt hàng</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>