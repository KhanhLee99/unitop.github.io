<?php
get_header();
?>
<div class="content">
    <h1>danh sách thành viên</h1>
    <table>
        <?php if (!empty($list_user_per_page)) {
        ?>
            <thead>
                <tr>
                    <td>STT</td>
                    <td>Tên</td>
                    <td>Email</td>
                    <td>Giới tính</td>
                    <td>Thu nhập</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = $start;
                foreach ($list_user_per_page as $user) {
                    $temp++;
                ?>
                    <tr>
                        <td><?php echo $temp; ?></td>
                        <td><?php echo $user['fullname'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['gender'] ?></td>
                        <td><?php echo currency_format($user['earn']) ?></td>
                    </tr>
                <?php
                } ?>
            </tbody>
        <?php
        } ?>
    </table>
    <div class="div-paging">
        <ul class="ul-paging">
            <?php if (!empty($list_user_per_page)) {
                if ($page > 1) {
                    $page_next = $page - 1;
                    $link = base_url("?mod=users&action=paging&id={$page_next}");
                    echo "<li><a href='{$link}'>Trước</a></li>";
                }
                for ($i = 1; $i <= $num_page; $i++) {
            ?>
                    <li><a href="<?php echo base_url("?mod=users&action=paging&id={$i}") ?>" class="active" <?php if($i==$page) echo "style='color:red'" ?>><?php echo $i ?></a></li>
            <?php
                }
                if ($page < $num_page) {
                    $page_next = $page + 1;
                    $link = base_url("?mod=users&action=paging&id={$page_next}");
                    echo "<li><a href='{$link}'>Sau</a></li>";
                }
            } ?>

        </ul>
    </div>
</div>

<?php
get_footer();

?>