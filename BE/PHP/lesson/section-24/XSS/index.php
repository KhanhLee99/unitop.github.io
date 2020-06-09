<?php
require 'lib/comment.php';
// setcookie('user_login', 'admin' , time() +3600); //test

$conn = mysqli_connect('localhost', 'root', '', 'unitop');
if (!$conn) {
    echo "Kết nối thất bại <br>";
} else {
    echo "Kết nối thàng công <br>";
}
?>

<?php
if (isset($_POST['btn_comment'])) {
    $username = $_POST['username'];
    $content = htmlentities($_POST['content']) ;

    //add comment vao DB
    $sql = "INSERT INTO `tbl_comment` (`username`, `content`) VALUES ('{$username}','{$content}')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Đã bình luận thành công <br>";
    } else {
        echo "Lỗi: " . mysqli_error($conn) . "<br>";
    }
}
//Lấy dữ liệu từ db -> show ra màn hình
$sql = "SELECT * FROM `tbl_comment`";
$result = mysqli_query($conn, $sql);
$data = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
} else {
    echo "Lỗi: " . mysqli_error($conn) . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>XSS</title>
    <style>
        .comment {
            width: 500px;
            border: 1px solid red;
        }

        b {
            font-size: 30px;
            margin-bottom: 8px;
            display: block;
        }

        input {
            width: 100%;
            padding: 3px 0;
        }

        textarea {
            width: 100%;
            margin-bottom: 2px;
        }
    </style>
</head>

<body>
    <div class="comment">
        <b>Bình luận</b>
        <form action="" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <label for="content">Nội dung bình luận</label> <br>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
            <input type="submit" name="btn_comment" value="Bình luận">
        </form>
    </div>
    <?php if (!empty($data)) {
    ?>
        <div class="show">
            <?php foreach ($data as $item) {
            ?>
                <p><strong><?php echo $item['username']; ?> </strong> : <span><?php echo $item['content']; ?></span> </p>
            <?php
            } ?>
        </div>
    <?php
    } ?>

</body>

</html>