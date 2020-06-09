<?php 
get_header('product');
$cat_id = (int)$_GET['cat_id'];
?>
<div class="content">
    Chi tiết Sản phẩm - <?php echo $cat_id; ?>

</div>
<?php
get_footer();
?>