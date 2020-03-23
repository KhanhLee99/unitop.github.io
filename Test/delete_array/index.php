<?php
$array = array(
    1 => array(
        'name' => 'NVA',
        'tuoi' => 28
    ),
    2 => array(
        'name' => 'NVB',
        'tuoi' => 29
    )
);

foreach($array as $key => $value){
    if($value->tuoi == 29){
        unset($array[$key]);
    }
}

// unset($array[1]);

echo("<pre>");
print_r($array);
echo("<pre>");

// echo($array[1]['name']);

