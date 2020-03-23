<?php
$category = array(
    1 => array(
        'cat_id' => 1,
        'cat_title' => 'The Gioi',
        'level' => 0
    ),

    2 => array(
        'cat_id' => 2,
        'cat_title' => 'Chau A',
        'level' => 1
    ),

    3 => array(
        'cat_id' => 3,
        'cat_title' => 'Viet Nam',
        'level' => 2
    ),

    4 => array(
        'cat_id' => 4,
        'cat_title' => 'Chau Au',
        'level' => 1
    ),
);
if (!empty($category)) {
    foreach ($category as $key => $item) {
        echo $item['cat_id']." ".str_repeat("----", $item['level'])." " . $item['cat_title'] . "<br>";
    }
}
