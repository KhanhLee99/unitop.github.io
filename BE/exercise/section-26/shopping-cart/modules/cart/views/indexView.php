<?php
// show_array($list_cart_buy);
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
    <form action="?mod=cart&controller=index&action=update" method="POST">
        <div id="wrapper" class="wp-inner clearfix">
            <?php if (!empty($list_cart_buy)) {
            ?>
                <div class="section" id="info-cart-wp">
                    <div class="section-detail table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Mã sản phẩm</td>
                                    <td>Ảnh sản phẩm</td>
                                    <td>Tên sản phẩm</td>
                                    <td>Giá sản phẩm</td>
                                    <td>Số lượng</ td>
                                    <td colspan="2">Thành tiền</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list_cart_buy as $item) {
                                ?>
                                    <tr>
                                        <td><?php echo $item['code'] ?></td>
                                        <td>
                                            <a href="" title="" class="thumb">
                                                <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="" title="" class="name-product"><?php echo $item['product_title'] ?></a>
                                        </td>
                                        <td><?php echo currency_format($item['price']) ?></td>
                                        <td>
                                            <input data-id=<?php echo $item['id'] ?> type="number" min="1" max="10" name="qty[<?php echo $item['id'] ?>]" value="<?php echo $item['qty'] ?>" class="num-order">
                                        </td>
                                        <td id="sub_total_<?php echo $item['id'] ?>"><?php echo currency_format($item['sub_total']) ?></td>
                                        <td>
                                            <a href="<?php echo $item['url_delete_cart'] ?>" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }  ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <p  class="fl-right">Tổng giá: <span id="total-price"><?php echo currency_format($total)  ?></span></p>
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
                        <a href="?mod=cart&controller=index&action=delete_cart" title="" id="delete-cart">Xóa giỏ hàng</a>
                    </div>
                </div>
            <?php
            } else {
                echo "<b>Không có sản phẩm nào trong giỏ hàng</b>";
            } ?>

        </div>
    </form>


</div>
<?php
get_footer();
?>