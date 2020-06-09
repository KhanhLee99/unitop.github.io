<?php
if (isset($_POST['btn_add'])) {
    if (empty($_POST['detail'])) {
        echo "ERROR !!!";
    } else {
        echo $_POST['detail'];
    }
}
?>

<html lang="en">
    <head>
        <title> Checkbox Form </title>
        <meta charset="utf-8">

    </head>
    <body >
        <form action="" method="POST">
            <h1>Detail</h1>
            <textarea name="detail" cols="50" rows="15"></textarea><br>
            <input type="submit" name="btn_add" value="Register">
        </form>
    </body>

</html>

