<?php
if (isset($_POST['btn_search'])) {
    if (!empty($_POST['p'])) {
        echo $_POST['p'];
    } else {
        echo "Hay nhap du lieu vao text box";
    }
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
        <form action="" method="POST">
            Search <input type="text" name="p">
            <input type="submit" name="btn_search" value="Search">
        </form>
    </body>