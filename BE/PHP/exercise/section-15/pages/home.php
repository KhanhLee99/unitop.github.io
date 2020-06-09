
<div class="content">
    <div class="container text-xs-center">
        <?php
        ob_start();
        session_start();
        session_destroy();
        if (!isset($_SESSION['is_login'])) {
            echo "<a href='?page=login'>Đăng nhập</a>";
        }
        else{
            echo "<h1 class='display-3'>THIS IS HOME</h1>";
        }
        ?>
    </div>

</div> <!-- het content -->
