<?php
$array1 = array(
    "php" => "laravel",
    "css", "html"
);
$array2 = array(
    "python",
    "php" => "zend",
    "js" => "nodeJs"
);
$result = array_merge($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";

// kq:
// Array
// (
//     [php] => zend
//     [0] => css
//     [1] => html
//     [2] => python
//     [js] => nodeJs
// )

$array1 = array(
    "php1" => "laravel",
    "css", "html"
);
$array2 = array(
    "python",
    "php2" => "zend",
    "js" => "nodeJs"
);
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
$result = array_merge($array2, $array1);
echo "<pre>";
print_r($result);
echo "</pre>";

// Array
// (
//     [0] => python
//     [php2] => zend
//     [js] => nodeJs
//     [php1] => laravel
//     [1] => css
//     [2] => html
// )

$result = array_merge($array3, $array2, $array1);
echo "<pre>";
print_r($result);
echo "</pre>";

// Array
// (
//     [0] => Array
//         (
//             [id] => 1
//             [name] => khanh
//         )

//     [1] => Array
//         (
//             [id] => 2
//             [name] => khanhle
//         )

//     [2] => python
//     [php2] => zend
//     [js] => nodeJs
//     [php1] => laravel
//     [3] => css
//     [4] => html
// )