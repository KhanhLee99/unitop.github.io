<?php
if (!empty($_GET['mod']) && !empty($_GET['act'])) {
    echo $_GET['mod'] . "<br>";
    echo $_GET['act'];
}
?>
<html lang="en">
    <head>
        <title> Checkbox Form </title>
        <meta charset="utf-8">

    </head>
    <body >
        <form action="" method="GET">
            <a href="?mod=product&act=main">Sản phẩm</a>           
        </form>
    </body>

</html>