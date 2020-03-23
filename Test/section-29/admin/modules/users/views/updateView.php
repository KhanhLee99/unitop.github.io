<?php
get_header();
?>

<div id="main-content-wp" class="info-account-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Cập nhật tài khoản</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        <div id="sidebar" class="fl-left">
            <ul id="list-cat">
                <li>
                    <a href="<?php echo base_url("?mod=users&action=changePass&id={$id}") ?>" title="">Đổi mật khẩu</a>
                </li>
                <li>
                    <a href="<?php echo base_url("?mod=users&action=logout") ?>" title="">Thoát</a>
                </li>
            </ul>
        </div>
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST">
                        <label for="display-name">Tên hiển thị</label>
                        <input type="text" name="fullname" id="display-name" value="<?php echo $fullname ?>">
                        <?php echo form_error('fullname') ?>

                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" id="username" placeholder="admin" readonly="readonly" value=" <?php echo $username ?>">

                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?php echo $email ?>" >
                        <?php echo form_error('email') ?> 

                        <label for="tel">Số điện thoại</label>
                        <input type="tel" name="phone" id="tel" value="<?php echo $phone ?>" >
                        <?php echo form_error('phone') ?>

                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" id="address" value="<?php echo $address ?>">
                        <button type="submit" name="btn_update" id="btn-submit">Cập nhật</button>
                        <?php echo form_error('account') ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
get_footer();
?>