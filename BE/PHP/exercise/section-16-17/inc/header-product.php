<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hệ thống điều hướng User-manger-Advanced</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="header mod-product">
            <div class="header_1">
                <div class="logo">LOGO</div>
                <div class="admin">
                    <?php
                    $fullname = get_info_user('fullname');
                    echo "<p>Xin chào <b>{$fullname}</b>(<a href='?mod=logout&act=main'>Thoát</a>)</p>";
                    ?>
                </div>
            </div>
            <!--het header 1 -->
            <div class="header_2">
                <ul class='menu'>
                    <li><a href="?">Trang chủ</a></li>
                    <li><a href="?mod=page&act=detail">Giới thiệu</a></li>
                    <li><a href="?mod=product&act=main">Sản phẩm</a></li>
                    <li><a href="?mod=login&act=main">Đăng nhập</a></li>
                </ul>
            </div>
            <!--het header 2 -->
        </div>