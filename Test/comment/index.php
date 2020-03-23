<?php
require 'lib/lib.php';

$conn = mysqli_connect('localhost', 'root', '', 'db_comment');

// show_array($data);

if (isset($_POST['btn_comment'])) {
    $error = array();
    #name
    if (empty($_POST['name'])) {
        $error['name'] = "Ko dc de trong";
    } else {
        $name = $_POST['name'];
    }

    #content
    if (empty($_POST['content'])) {
        $error['content'] = "Ko dc de trong";
    } else {
        $content = $_POST['content'];
    }

    #time
    $time = time();

    if (empty($error)) {
        $sql = "INSERT INTO `tbl_comment` (`name`,`content`,`time`) VALUES ('{$name}','{$content}',{$time})";
        if (mysqli_query($conn, $sql)) {
            echo ("Đã thêm thành công");
        } else {
            echo ("LỖI" . $sql . "<br>" . mysqli_error($conn));
        }
        $error['cmt'] = "Đã bình luận";
    } else {
        $error['cmt'] = "Error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test cmt</title>
    <link rel="stylesheet" href="public/css/cmt.css">
    <script src="public/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="public/js/app.js" type="text/javascript"></script>
</head>

<body>
    <form action="" method="POST">
        <?php echo form_error('cmt') ?>
        <label for="name">Tên</label>
        <input type="text" name="name" id="name" value="<?php echo get_value("name"); ?>">
        <br>
        <?php echo form_error('name') ?>
        <br>
        <label for="content">Nội dung bình luận</label> <br>
        <textarea name="content" id="content" cols="50" rows="10"><?php echo get_value("content"); ?></textarea>
        <br>
        <?php echo form_error('content') ?>
        <input type="submit" name="btn_comment" value="Bình luận">
    </form>
    <div class="block_comment">
        <?php
        $sql = "SELECT * FROM `tbl_comment`";
        $result =  mysqli_query($conn, $sql);
    
        $data = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        if (!empty($data)) {
            foreach ($data as $cmt) {
        ?>
                <span class="time"><?php echo date("d/m H:i", $cmt['time']) ?></span>
                <span> <a href="" class="name"><b><?php echo $cmt['name'] ?></b> </a></span>
                <span><?php echo $cmt['content'] ?></span>
                <br>
        <?php
            }
        } ?>
    </div>
</body>

</html>