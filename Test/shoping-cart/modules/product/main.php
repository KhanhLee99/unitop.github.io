<?php
get_header();
?>
<?php
$id = (int) $_GET['id'];
$list_product = get_cat_product_by_id($id);
// show_array($list_product);
?>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <?php if (isset($list_product)) {
            ?>
                <div class="section list-cat">
                    <div class="section-head">
                        <h3 class="section-title"><?php echo get_name_cat($id); ?></h3>
                        <?php if (!empty($list_product)) {
                        ?>
                            <p class="section-desc">Có <?php echo count($list_product) ?> sản phẩm trong mục này</p>
                    </div>
                    <div class="section-detail">
                        <ul class="list-item clearfix">
                            <?php foreach ($list_product as $item) {
                            ?>
                                <li>
                                    <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb'] ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($item['price']) ?></p>
                                </li>
                            <?php
                            } ?>
                        </ul>
                    </div>

                </div>

                <div class="section" id="pagenavi-wp">
                    <div class="section-detail">
                        <ul id="list-pagenavi">
                            <li class="active">
                                <a href="" title="">1</a>
                            </li>
                            <li>
                                <a href="" title="">2</a>
                            </li>
                            <li>
                                <a href="" title="">3</a>
                            </li>
                        </ul>
                        <a href="" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            <?php
                        } else {
            ?>
                <p class="section-desc">Không có sản phẩm nào trong mục này</p>
        <?php
                        }
                    } ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>