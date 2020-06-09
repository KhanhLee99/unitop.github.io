<?php
$list_menu = array('Star', 'Music', 'Showbiz', 'Sport');
$list_new = array(
    1 => array(
        'id' => 'Sport1',
        'image' => "https://kenh14cdn.com/zoom/460_289/2019/12/5/78814921845985742482381210675228269871104nresult-1575541813088599739477-crop-15755471925351405878522.jpg",
        'title' => 'Cho Tiến Linh đá lại phạt đền, trọng tài chính trận Việt Nam - Thái Lan hứng đủ gạch đá của fan Đông Nam Á',
        'content' => 'Quyết định của trọng tài đã trực tiếp ảnh hưởng đến kết quả tại bảng B và biến Thái Lan thành cựu vương SEA Games. Thái Lan dẫn trước 2-0 nhưng bị Việt Nam gỡ hòa 2-2 ở lượt cuối vòng bảng SEA Games 2019.'
    ),
    2 => array(
        'id' => 'Sport2',
        'image' => "https://kenh14cdn.com/thumb_w/250/2019/12/5/ava-1575557848462480834265-crop-15755578653891232890799.jpg",
        'title' => '5 items UNIQLO giảm giá "kịch" đáng sắm nhất dịp khai trương: Sơ mi dạ 399k, áo chống nắng "phá giá" 399k, áo phao rẻ ngang mua tại Nhật',
        'content' => 'Đây là những mặt hàng có mức giá sau giảm cực kỳ hấp dẫn mà bạn nên tranh thủ sắm trong dịp khai trương UNIQLO Đồng ...'
    ),
    3 => array(
        'id' => 'Sport3',
        'image' => "https://kenh14cdn.com/thumb_w/250/2019/12/5/x4q0almtohx1euuodaxb3ursnrwcze45dkidqq5ig0e-horz-15755396961481726920116-crop-1575539700275277405213-15755587007821348291672-crop-15755587107711053580592.jpg",
        'title' => 'Hot girl chia sẻ ảnh chụp gia đình hạnh phúc cùng chồng con, dung mạo của đứa trẻ khiến dân mạng xôn xao tranh cãi',
        'content' => '2 vợ chồng Hàn An Nhiễm sở hữu vẻ ngoài lung linh nhưng con gái của họ lại có nhiều điểm khác biệt với bố mẹ.'
    )
);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Website Kenh14</title>
        <style>
            .title{
                float: left;
                padding: 15px 20px;
                background: #a70e1a;
                color: white;
                font-weight: bold;
            }
        </style>
    </head>
    <body style="margin: 0; padding: 0;">
        <div style="margin-bottom: 20px; height: 40px;">
            <ul style="list-style: none; ">
                <?php foreach ($list_menu as $item) { ?>
                    <li class="title" > <?php echo $item; ?></li>
                <?php } ?>


            </ul>
        </div>
        <?php foreach ($list_new as $item) { ?>
            <div style="width: 460px; height: 440px;  margin-bottom: 20px;">
                <a href=""><img src="<?php echo $item['image']; ?>" alt="" style="width: 460px; height: 290px;"></a>
                <a href="" style="text-decoration: none; font-weight: bold; font-family: tahoma; font-size: 15px; color: black;"><?php echo $item['title']; ?></a>
                <p><?php echo $item['content']; ?></p>
            </div>
        <?php } ?>
    </body>
</html>
