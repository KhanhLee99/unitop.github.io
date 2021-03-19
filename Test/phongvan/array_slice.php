<?php
$array = range(
    "a",
    "f"
); //["a", "b", "c", "d", "e", "f"]

$output = array_slice($array, 0, 10);      // returns "a", "b", "c", "d", "e", "f" (bắt đầu từ 0 và lấy 10 phần tử)
echo "<pre>";
print_r($output);
echo "</pre>";

$output = array_slice($array, 2);      // returns "c", "d","e","f"
echo "<pre>";
print_r($output);
echo "</pre>";

$output = array_slice($array, -2, 1);  // returns "e"
echo "<pre>";
print_r($output);
echo "</pre>";

$output = array_slice($array, 0, 3);   // returns "a", "b", and "c"
echo "<pre>";
print_r($output);
echo "</pre>";
