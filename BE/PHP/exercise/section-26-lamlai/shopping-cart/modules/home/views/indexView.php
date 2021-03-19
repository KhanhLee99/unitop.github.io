<?php
// show_array($list_product_cat);
// show_array($list_products);
get_header();
?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <?php if (!empty($list_product_cat)) {
                foreach ($list_product_cat as $cat) {
            ?>
                    <div class="section list-cat">
                        <div class="section-head">
                            <h3 class="section-title"><?php echo $cat['cat_title'] ?></h3>
                        </div>
                        <div class="section-detail">
                            <?php if (!empty($list_products[$cat['id']])) {
                            ?>
                                <ul class="list-item clearfix">
                                    <?php foreach ($list_products[$cat['id']] as $product) {
                                    ?>
                                        <li>
                                            <a href="?mod=products&action=detail&id=<?php echo $product['id'] ?>" title="" class="thumb">
                                                <img src="<?php echo $product['product_thumb'] ?>" alt="">
                                            </a>
                                            <a href="?mod=products&action=detail&id=<?php echo $product['id'] ?>" title="" class="title"><?php echo $product['product_title'] ?></a>
                                            <p class="price"><?php echo currency_format($product['price'], 'VNĐ')  ?></p>
                                        </li>
                                    <?php
                                    } ?>

                                </ul>
                            <?php
                            } else {
                                echo "<b>Không có sản phẩm nào</b>";
                            } ?>

                        </div>
                    </div>
            <?php
                }
            } ?>


        </div>
    </div>
</div>

<?php
get_footer();
?>