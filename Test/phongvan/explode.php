<?php
$str = 'one,two,three,four';
print_r(explode(',', $str, 0)); //Array ( [0] => one,two,three,four )
echo "<br>";
print_r(explode(',', $str, 1)); //Array ( [0] => one,two,three,four )
echo "<br>";

print_r(explode(',', $str, 2)); //Array ( [0] => one [1] => two,three,four )
echo "<br>";
print_r(explode(',', $str, 3)); //Array ( [0] => one [1] => two [2] => three,four )
echo "<br>";
print_r(explode(',', $str, 4)); //Array ( [0] => one [1] => two [2] => three [3] => four )
echo "<br>";
print_r(explode(',', $str, 5)); //Array ( [0] => one [1] => two [2] => three [3] => four )
echo "<br>";

print_r(explode(',', $str, -1)); //Array ( [0] => one [1] => two [2] => three )
echo "<br>";
print_r(explode(',', $str, -2)); //Array ( [0] => one [1] => two )
echo "<br>";
print_r(explode(',', $str)); //Array ( [0] => one [1] => two [2] => three [3] => four )
echo "<br>";

$input1 = "hello";

$input2 = "hello,there";

$input3 = ',';

var_dump(explode(',', $input1)); //array(1) { [0]=> string(5) "hello" }
echo "<br>";
var_dump(explode(',', $input2)); //array(2) { [0]=> string(5) "hello" [1]=> string(5) "there" }
echo "<br>";
var_dump(explode(',', $input3)); //array(2) { [0]=> string(0) "" [1]=> string(0) "" }
echo "<br>";
// original string

$OriginalString = "Hello, How can we help you?";

// Without optional parameter NoOfElements

print_r(explode(" ", $OriginalString)); echo "<br>"; //Array ( [0] => Hello, [1] => How [2] => can [3] => we [4] => help [5] => you? )

// with positive NoOfElements
 
print_r(explode(" ", $OriginalString, 3)); echo "<br>"; //Array ( [0] => Hello, [1] => How [2] => can we help you? )

// with negative NoOfElements

print_r(explode(" ", $OriginalString, -1)); echo "<br>"; //Array ( [0] => Hello, [1] => How [2] => can [3] => we [4] => help )

echo '<pre>';
print_r(explode(' ', 'hoc lap trinh online freetuts.net', 3));
// Array
// (
//     [0] => hoc
//     [1] => lap
//     [2] => trinh online freetuts.net
// )