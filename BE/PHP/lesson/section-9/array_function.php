<?php

$my_value = 10;
$my_array_1 = array(1,2,3,4,5,6);
$my_array_2 = array(7,8,9);

#array_key_exits

if(array_key_exists(1, $my_array_1)){
    echo "True.<br>";
}
else{
    echo "False.<br>";
}

if(array_key_exists(5, $my_array_2)){
    echo "True.<br>";
}
else{
    echo "False.<br>";
}

#array_merge

$array_merge = array_merge($my_array_1, $my_array_2);

echo "<pre>";
print_r($array_merge);
echo "</pre>";

#count

echo count($array_merge)."<br>";

#in_array

if(in_array(5, $my_array_1)){
    echo "True.<br>";
}
else{
    echo "False.<br>";
}

if(in_array(5, $my_array_2)){
    echo "True.<br>";
}
else{
    echo "False.<br>";
}

#array_values

print_r(array_values($my_array_2));
echo "<br>";
print_r($my_array_2);
echo "<br>";

#array_search

echo "key => ".array_search(3, $my_array_1)."<br>  ";

#is_array

if(is_array($my_array_1)){
    echo "True.<br>";
}
else{
    echo "False.<br>";
}

if(is_array($my_value)){
    echo "True.<br>";
}
else{
    echo "False.<br>";
}

