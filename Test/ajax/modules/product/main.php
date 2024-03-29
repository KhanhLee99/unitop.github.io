<?php
get_header();
$cat_id = (int)$_GET['cat_id'];
$info_cat = get_info_cat($cat_id);
$list_item = get_list_product_by_cat_id($cat_id);
$num_product = count($list_item);
$num_page = ceil($num_product/2);
// echo $num_page;

?>
<div id="main-content-wp" class="category-product-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $info_cat['cat_title']; ?></h3>
                    <p class="section-desc">Có <?php echo count($list_item); ?> sản phẩm trong mục này</p>
                </div>
                <div class="section-detail">
                    <?php if(!empty($list_item)){
                        ?>
                        <ul class="list-item clearfix">
                            <?php foreach($list_item as $item){
                                ?>
                                <li>
                                    <a href="<?php echo $item['url']; ?>" title="" class="thumb">
                                        <img src="<?php echo $item['product_thumb']; ?>" alt="">
                                    </a>
                                    <a href="<?php echo $item['url']; ?>" title="" class="title"><?php echo $item['product_title']; ?></a>
                                    <p class="price"><?php echo currency_format($item['price']); ?></p>
                                </li>
                                <?php
                            } ?> 
                        </ul>
                        <?php
                    } ?>
                    
                </div>
            </div>
            <?php if($num_page > 0){
                ?>
                <div class="section" id="pagenavi-wp">
                    <div class="section-detail">
                        <ul id="list-pagenavi">
                            <?php 
                                $count = 0;
                                for($i=0; $i<$num_page; $i++){
                                $count ++;
                                ?>
                                <li class="">
                                    <a href="" title=""><?php echo $count; ?></a>
                                </li>
                                <?php
                            } ?>
                        </ul>
                        <a href="" title="" class="next-page"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <?php
            } ?>
            
        </div>
    </div>
</div>
<?php
get_footer();
?>