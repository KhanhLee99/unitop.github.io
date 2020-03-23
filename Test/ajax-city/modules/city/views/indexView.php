<?php
get_header();
?>
<html>

<head>
    <title>Danh sách thành viên</title>
    <meta charset="utf8" />
</head>

<body>
    <select name="city" id="city">
        <option value="">-- Chọn thành phố --</option>
        <?php foreach ($list_city as $city) {
        ?>
            <option value="<?php echo  $city['city_id'] ?>"><?php echo $city['city_name'] ?></option>
        <?php
        }  ?>

    </select>

    <select name="district" id="district">
        <option value="">-- Chọn quận --</option>
        <option class="option1" id="1" value="1">Đà Nẵng</option>
        <option class="option2" id="2" value="2">Hà Nội</option>
        <option class="option3" id="3" value="3">Hồ Chí Minh</option>
    </select>

</body>

</html>