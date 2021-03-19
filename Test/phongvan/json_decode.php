<?php
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
$json_encode = json_decode($json);
// var_dump($json_encode);
// var_dump(json_decode($json, true));
foreach($json_encode as $item){
    echo $item;
}
?>