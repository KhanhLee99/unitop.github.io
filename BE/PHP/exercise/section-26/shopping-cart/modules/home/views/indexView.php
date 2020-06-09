<?php
get_header();
?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar() ?>
        <?php if (!empty($list_products_cat)) {
            foreach ($list_products_cat as $cat) {
                $products = $list_product[$cat['id']];
        ?>
                <div id="content" class="fl-right">
                    <div class="section list-cat">
                        <div class="section-head">
                            <a href="<?php echo $cat['url'] ?>">
                                <h3 class="section-title"><?php echo $cat['cat_title'] ?></h3>
                            </a>
                        </div>
                        <div class="section-detail">
                            <ul class="list-item clearfix">
                                <?php foreach ($products as $item) {
                                ?>
                                    <li>
                                        <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                            <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                        </a>
                                        <a href="<?php echo $item['url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                                        <p class="price"><?php echo currency_format( $item['price'])  ?></p>
                                    </li>
                                <?php
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
        <?php
            }
        } ?>

    </div>
</div>

<?php
get_footer();

?>