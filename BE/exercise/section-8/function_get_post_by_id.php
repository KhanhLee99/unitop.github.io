<?php

$list_post_1 = array(
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
        'content' => '3 vợ chồng Hàn An Nhiễm sở hữu vẻ ngoài lung linh nhưng con gái của họ lại có nhiều điểm khác biệt với bố mẹ.'
    ),
);

function get_post_by_id_1($id_post, $list_post = array()) {

    $temp = 0;
    foreach ($list_post as $key => $item) {
        if ($item['id'] == $id_post) {
            $temp = $key;
        }
    }

    echo "<pre>";
    print_r($list_post[$temp]);
    echo "</pre>";
}

//get_post_by_id_1('Sport1', $list_post_1);


$list_post_2 = array(
    1 => array(
        'id' => 1,
        'image' => "https://kenh14cdn.com/zoom/460_289/2019/12/5/78814921845985742482381210675228269871104nresult-1575541813088599739477-crop-15755471925351405878522.jpg",
        'title' => 'Cho Tiến Linh đá lại phạt đền, trọng tài chính trận Việt Nam - Thái Lan hứng đủ gạch đá của fan Đông Nam Á',
        'content' => 'Quyết định của trọng tài đã trực tiếp ảnh hưởng đến kết quả tại bảng B và biến Thái Lan thành cựu vương SEA Games. Thái Lan dẫn trước 2-0 nhưng bị Việt Nam gỡ hòa 2-2 ở lượt cuối vòng bảng SEA Games 2019.'
    ),
    2 => array(
        'id' => 2,
        'image' => "https://kenh14cdn.com/thumb_w/250/2019/12/5/ava-1575557848462480834265-crop-15755578653891232890799.jpg",
        'title' => '5 items UNIQLO giảm giá "kịch" đáng sắm nhất dịp khai trương: Sơ mi dạ 399k, áo chống nắng "phá giá" 399k, áo phao rẻ ngang mua tại Nhật',
        'content' => 'Đây là những mặt hàng có mức giá sau giảm cực kỳ hấp dẫn mà bạn nên tranh thủ sắm trong dịp khai trương UNIQLO Đồng ...'
    ),
    3 => array(
        'id' => 3,
        'image' => "https://kenh14cdn.com/thumb_w/250/2019/12/5/x4q0almtohx1euuodaxb3ursnrwcze45dkidqq5ig0e-horz-15755396961481726920116-crop-1575539700275277405213-15755587007821348291672-crop-15755587107711053580592.jpg",
        'title' => 'Hot girl chia sẻ ảnh chụp gia đình hạnh phúc cùng chồng con, dung mạo của đứa trẻ khiến dân mạng xôn xao tranh cãi',
        'content' => '3 vợ chồng Hàn An Nhiễm sở hữu vẻ ngoài lung linh nhưng con gái của họ lại có nhiều điểm khác biệt với bố mẹ.'
    ),
);

function get_post_by_id_2($id) {
    global $list_post_2;

    if (array_key_exists($id, $list_post_2)) {

        return $list_post_2[$id];
    }
    return false;
}

echo "<pre>";
print_r(get_post_by_id_2(2));
echo "</pre>";
