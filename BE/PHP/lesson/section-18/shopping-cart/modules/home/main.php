<?php
get_header();
?>
<?php
$list_cat = get_list_cat();
?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
        
            <!-- ----------------------------------- -->
            <?php
            foreach ($list_cat as $cat) {
                $list_product_by_cat = get_list_by_cat($cat['id']);  
            ?>
                <div class="section list-cat">
                    <div class="section-head">
                        <a href="<?php echo $cat['url'] ?>">
                            <h3 class="section-title"><?php if(!empty($list_product_by_cat)){ echo $cat['cat_title'];}  ?></h3>
                        </a>
                    </div>
                    <div class="section-detail">
                        <?php          
                        
                        if (!empty($list_product_by_cat)) {
                        ?>
                            <ul class="list-item clearfix">
                                <?php
                                foreach ($list_product_by_cat as $product) {
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
                                ?>
                            </ul>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>
<?php
get_footer();
?>