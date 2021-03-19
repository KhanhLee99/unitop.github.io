<?php
// show_array($_SESSION['cart']['info']);
get_header();
?>
<div id="main-content-wp" class="cart-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <h3 class="title">Giỏ hàng</h3>
            </div>
        </div>
    </div>
    <form action="?mod=cart&controller=index&action=edit" method="POST">
        <div id="wrapper" class="wp-inner clearfix">
            <?php if (!empty($list_product_cart)) { ?>
                <div class="section" id="info-cart-wp">
                    <div class="section-detail table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Mã sản phẩm</td>
                                    <td>Ảnh sản phẩm</td>
                                    <td>Tên sản phẩm</td>
                                    <td>Giá sản phẩm</td>
                                    <td>Số lượng</td>
                                    <td colspan="2">Thành tiền</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($list_product_cart as $product) {
                                ?>
                                    <tr>
                                        <td><?php echo $product['code'] ?></td>
                                        <td>
                                            <a href="" title="" class="thumb">
                                                <img src="<?php echo $product['product_thumb'] ?>" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="" title="" class="name-product"><?php echo $product['product_title'] ?></a>
                                        </td>
                                        <td><?php echo currency_format($product['price'], 'VNĐ') ?></td>
                                        <td>
                                            <input data-id=<?php echo $product['id'] ?> type="number" min ="1" name="qty[<?php echo $product['id'] ?>]" value="<?php echo $product['qty'] ?>" class="num-order">
                                        </td>
                                        <td id="sub_total_<?php echo $product['id'] ?>"><?php echo currency_format($product['sub_total'], 'VNĐ') ?></td>
                                        <td>
                                            <a href="?mod=cart&action=delete&id=<?php echo $product['id'] ?>" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>


                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <p id="total-price" class="fl-right">Tổng giá: <span><?php echo currency_format($_SESSION['cart']['info']['total'], 'VNĐ')  ?></span></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <div class="fl-right">
                                                <input type="submit" name="btn_update" value="Cập nhật giỏ hàng" id="update-cart">
                                                <a href="?page=checkout" title="" id="checkout-cart">Thanh toán</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
                <div class="section" id="action-cart-wp">
                    <div class="section-detail">
                        <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                        <a href="?" title="" id="buy-more">Mua tiếp</a><br />
                        <a href="?mod=cart&action=deleteAll" title="" id="delete-cart">Xóa giỏ hàng</a>
                    </div>
                </div>
            <?php } else {
                echo "<b>Không có sản phẩm nào trong giỏ hàng</b>";
            } ?>
        </div>
    </form>
</div>
<?php get_footer(); ?>