<?php
get_header();
?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-xs-center">
                <h1 class="display-3">Danh sách thành viên</h1>
                <table>
                    <thead>
                        <tr>
                            <td>STT</td>
                            <td>Tên</td>
                            <td>Email</td>
                            <td>Giới tính</td>
                            <td>Thu nhập</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($list_users)) {
                            $t = 0;
                            foreach ($list_users as $user) {
                                $t ++;
                                ?>
                                <tr>
                                    <td><?php echo $t; ?></td>
                                    <td><?php echo $user['fullname'] ?></td>
                                    <td><?php echo $user['email'] ?></td>
                                    <td><?php echo get_gender($user['gender'])  ?></td>
                                    <td><?php echo currency_format($user['earn'], '$'); ?></td>
                                    <td><a href="?mod=users&controller=index&action=detail&id=<?php echo $user['user_id'] ?>">Chi tiết</a></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>




