<?php
if (isset($_POST['btn-delete'])) {
    if (!empty($_POST['song-id'])) {
        foreach ($_POST['song-id'] as $item) {
            echo $item . "<br>";
        }
    } else {
        echo "aa";
    }
}
if (isset($_POST['btn-add'])) {
    echo "Yaaaaa";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <input type="submit" value="Xóa" name="btn-delete">
        <input type="checkbox" name="song-id[]" value="1">
        <input type="checkbox" name="song-id[]" value="2">
        <input type="checkbox" name="song-id[]" value="3">
        <input type="checkbox" name="song-id[]" value="4">
        <input type="checkbox" name="song-id[]" value="5">
        <input type="submit" value="Thêm" name="btn-add">
    </form>
</body>

</html>