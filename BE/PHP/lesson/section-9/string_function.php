<?php

$my_Str = 'le viet khanh';
$address = '12 thanh hai';

#strlen

echo strlen($my_Str).'<br>';

#ucfirst - ucwords

echo ucfirst($my_Str).'<br>';

echo ucwords($address).'<br>';

#trim

$my_Str_1 = 'le       viet        khanh';

echo $my_Str_1.'<br>';

echo trim($my_Str_1).'<br>';

#str_repeat

echo str_repeat($address, 3).'<br>';

#md5

echo md5($my_Str).'<br>';

#join - implode

$my_array_1 = array(1,2,3,4,5,6);
$my_array_2 = array(7,8,9);

echo join('-', $my_array_1).'<br>';
echo implode(',', $my_array_2).'<br>';

#explode

$array_temp = explode(' ', $my_Str);

print_r($array_temp);
echo '<br>';
echo implode('', $array_temp).'<br>';  
echo '<br>';  

#htmlspecialchars

echo "<img src='https://thumb.guucdn.net/600x450/images.guucdn.net/full/2019/11/20/59d4db3fb9d659842fa1c04c8578868274700293.jpg' alt='' class='layer1'><br>";
echo htmlspecialchars("<img src='https://thumb.guucdn.net/600x450/images.guucdn.net/full/2019/11/20/59d4db3fb9d659842fa1c04c8578868274700293.jpg' alt='' class='layer1'>");




