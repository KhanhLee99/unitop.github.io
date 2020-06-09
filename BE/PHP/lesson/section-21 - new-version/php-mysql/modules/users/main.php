<?php
// $sql = "SELECT * FROM `tbl_user`";
// $result = mysqli_query($conn, $sql);
// $list_user = array();
// $num_row = mysqli_num_rows($result);
// $alert = array();
// if ($num_row > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         $list_user[] = $row;
//     }
// } else {
//     $alert['empty'] = "Không có thành viên nào";
// }
$list_user = db_fetch_array("SELECT * FROM `tbl_user`");
$num_row = db_num_rows("SELECT * FROM `tbl_user`");
//show_array($list_user);
foreach ($list_user as &$user) {
    $user['url_update'] = "?mod=users&act=update&id={$user['user_id']}";
    $user['url_delete'] = "?mod=users&act=delete&id={$user['user_id']}";
}
?>
<?php
get_header();
?>

<style>
    .list_user {
        margin: 10px auto;
    }

    .list_user tr td {
        border-bottom: 1px solid #333;
        padding: 8px 15px;
    }

    .list_user thead tr td {
        border-bottom: 2px solid #333;
        font-weight: bold;
    }
</style>
<div class="content">
    <a href="?mod=users&act=add">Thêm mới</a>
    <h3 style="padding: 5px 0;">Danh sách thành viên</h3>
    <?php if (!empty($list_user)) {
    ?>
        <table class="list_user">
            <thead>
                <tr>
                    <td>Stt</td>
                    <td>Id</td>
                    <td>Fullname</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Gender</td>
                    <td>Thao tác</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = 0;
                unset($user); // vòng lặp bên trên có dùng $user, để không bị dính dữ liệu xuống vòng lặp dưới
                // ta unset nó đi
                foreach ($list_user as $user) {
                    $temp++;
                ?>
                    <tr>
                        <td><?php echo $temp; ?></td>
                        <td><?php echo $user['user_id'] ?></td>
                        <td><?php echo $user['fullname'] ?></td>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo get_gender($user['gender']) ?></td>
                        <td><a href="<?php echo $user['url_update'] ?>">Sửa</a> | <a href="<?php echo $user['url_delete'] ?>">Xóa</a></td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
        <p>Có <?php echo $num_row ?> thành viên</p>
        <?php
    } else {
        if (!empty($alert)) {
        ?>
            <h1><?php echo $alert['empty']; ?></h1>
    <?php
        }
    } ?>
</div>
<?php
get_footer();
?>