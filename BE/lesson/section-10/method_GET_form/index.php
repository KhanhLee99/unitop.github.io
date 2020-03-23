<?php
if (isset($_GET['btn_search'])) {
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}

echo $_GET['mod'];
echo $_GET['act'];
echo $_GET['id'];
if (isset($_GET['btn_search'])) {
    echo $_GET['p'];
}
?>
<html lang="en"><head>
        <title> Form </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <script type="text/javascript" src="vendor/bootstrap.js"></script>
        <script type="text/javascript" src="1.js"></script>
        <link rel="stylesheet" href="vendor/bootstrap.css">
        <link rel="stylesheet" href="vendor/font-awesome.css">
        <link rel="stylesheet" href="1.css">
    </head>
    <body >
        <form action="search.php" method="GET">
            <a href="?mod=product&act=detail&id=1268" alt="">Sản phẩm</a> <br>
            Search <input type="text" name="p">
            <input type="submit" name="btn_search" value="Search">
        </form>

        <form action="" method="GET">

            Tìm kiếm: <input type="text" name="p">
            <input type="submit" name="btn_search" value="Tìm kiếm">
        </form>
    </body>
