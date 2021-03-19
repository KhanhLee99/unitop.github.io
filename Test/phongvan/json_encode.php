<?php
$web = array(
    'dynamic'    => 'PHP',
    'styling'    => 'CSS',
    'behavior'    => 'Javascript'
);

$traicay = ['tao', 'cam', 'mam'];
$dongvat = [1 => 'chuot', 2 => 'meo', 'cho'];

echo gettype(json_encode($web)); //{"dynamic":"PHP","styling":"CSS","behavior":"Javascript"}
echo json_encode($traicay); //["tao","cam","mam"]
echo json_encode($dongvat); //{"1":"chuot","2":"meo","3":"cho"}