<?php
$array1 = array(
    'PHP',
    'CSS',
    'JS'
);
$str = implode(",", $array1); //PHP,CSS,JS
$str1 = implode("-", $array1); //PHP-CSS-JS

echo $str;
echo $str1;

$array2 = array(
    '1' => 'PHP',
    '2' => 'CSS',
    '3' => 'JS'
);

$str2 = implode("-", $array2);
echo $str2; //PHP-CSS-JS

$array3 = array(
    1 => array(
        'id' => 1,
        'name' => 'khanh'
    ),
    2 => array(
        'id' => 2,
        'name' => 'khanhle'
    ),
);

$str3 = implode("-", $array3[1]);
echo $str3; //1-khanh