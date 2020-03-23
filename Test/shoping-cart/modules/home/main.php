<?php
get_header();
?>
<?php
$list_cat = get_list_product_cat();
// show_array($list_cat);
?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <?php if (!empty($list_cat)) {
                foreach ($list_cat as $cat) {
                    $list_product = get_cat_product_by_id($cat['id']);
                    if (!empty($list_product)) {
            ?>
                        <div class="section list-cat">
                            <div class="section-head">
                                <a href="<?php echo $cat['url_cat'] ?>">
                                    <h3 class="section-title"><?php echo $cat['cat_title'] ?></h3>
                                </a>
                            </div>
                            <div class="section-detail">
                                <ul class="list-item clearfix">
                                    <?php
                                    foreach ($list_product as $product) {
                                    ?>
                                        <li>
                                            <a href="<?php echo $product['url'] ?>" title="" class="thumb">
                                                <img src="<?php echo $product['product_thumb'] ?>" alt="">
                                            </a>
                                            <a href="<?php echo $product['url'] ?>" title="" class="title"><?php echo $product['product_title'] ?></a>
                                            <p class="price"><?php echo currency_format($product['price'])  ?></p>
                                        </li>
                                <?php
                                    }
                                } ?>
                                </ul>
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