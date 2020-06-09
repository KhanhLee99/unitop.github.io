<?php
get_header('');
?>
<?php
$total = count($list_products);
$total_each_page = 4;
$total_pages = $total / $total_each_page;

$id = (int) $_GET['id'];
$start = $total_each_page * ($id - 1);
$finish = $total_each_page * $id;
?>
<style>
    .page {
        border: 1px solid red;
        padding: 3px 8px;
        margin: 0 1px;
    }
    
</style>
<div class="content">
    <?php if ($total_pages > 0) {
        for($j = $start; $j< $finish; $j++){
            ?>
            <p><?php echo $list_products[$j]; ?></p>
            <?php
        }
        for ($i = 1; $i <= $total_pages; $i++) {
    ?>
            <a href="?mod=pagination&act=main&id=<?php echo $i; ?>" class="page"><?php echo $i; ?></a>
    <?php
        }
    } ?>
</div>
<?php
get_footer();
?>