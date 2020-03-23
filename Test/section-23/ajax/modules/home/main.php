<?php
get_header();
?>
<?php
# Lấy danh sách sản phẩm theo id
$list_mobile = get_list_product_by_cat_id(1);
$list_computer = get_list_product_by_cat_id(2);
$list_earphone = get_list_product_by_cat_id(3);

# Lấy thông tin danh mục
$info_cat_mobile = get_info_cat(1);
$info_cat_computer = get_info_cat(2);
$info_cat_earphone = get_info_cat(3);
?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <a class="section-title" href="<?php echo $info_cat_mobile['cat_url']; ?>"><?php echo $info_cat_mobile['cat_title']; ?></a>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_mobile)) {
                        ?>
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_mobile as $item) {
                                ?>
                                <li>
                                    <a href="<?php echo $item['product_url'] ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumbnail']; ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['product_url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($item['product_price']); ?></p>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <a class="section-title" href="<?php echo $info_cat_computer['cat_url']; ?>"><?php echo $info_cat_computer['cat_title']; ?></a>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_computer)) {
                        ?>
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_computer as $item) {
                                ?>
                                <li>
                                    <a href="<?php echo $item['product_url']; ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumbnail']; ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['product_url']; ?>" title="" class="title"><?php echo $item['product_title']; ?></a>
                                    <p class="price"><?php echo currency_format($item['product_price']); ?></p>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>

            <div class="section list-cat">
                <div class="section-head">
                    <a class="section-title" href="<?php echo $info_cat_earphone['cat_url']; ?>"><?php echo $info_cat_earphone['cat_title']; ?></a>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_earphone)) {
                        ?>
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_earphone as $item) {
                                ?>
                                <li>
                                    <a href="<?php echo $item['product_url']; ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumbnail']; ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['product_url']; ?>" title="" class="title"><?php echo $item['product_title']; ?></a>
                                    <p class="price"><?php echo currency_format($item['product_price']); ?></p>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>