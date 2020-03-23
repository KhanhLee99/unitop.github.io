<div class="content">
    <?php if (!empty($list_news)) { ?>
        <div class="container">
            <div class="row">
                <?php
                foreach ($list_product as $item) {
                ?>
                    <div class="col-xs-3 text-xs-center">
                        <img src=<?php echo $item['image'] ?> alt="" class="img-fluid mb-2">
                        <a href="" class=""><?php echo $item['title'] ?></a>
                        <p><?php echo $item['prime'] ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>

    <?php } ?>
</div>