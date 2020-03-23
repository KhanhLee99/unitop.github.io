<?php

/**
 * Checklist thực hiện 
 * 1. Lấy id của sản phẩm 
 * 2. Lấy thông tin của sản phẩm theo id 
 * 3. Lưu những thông tin cần thiết ( id, tên sản phẩm , giá , hình, số lượng, đơn giá)
 * 3.1 Kiểm tra giỏ hàng ok chưa 
 * 3.2 Tính toán số lượng do số lượng là không cố định
 * 3.3 Tính toán đơn giá tạm thời 
 * 4. Tính tổng đơn hàng đã mua và tổng tiền
 * 5. Lưu thông tin đơn hàng 
 * 6. Tối ưu bằng hàm
 * 7. Kiểm tra
 * 2. 
 */
$product_id = (int) $_GET['id'];
add_cart($product_id);
redirect_to("?mod=cart&act=show");
