<?php

// for ($x = 0; $x <= 20; $x++) {
//     echo "$x <br>";
// }

$traicay = ['tao', 'cam', 'mam'];
//for
for ($x = 0; $x < count($traicay); $x++) {
    echo "$traicay[$x] <br>";
}

//while
$i = 0;
while($i < count($traicay)){
    echo "$traicay[$i] <br>";
    $i++;
}

//do while
$x = 0;
do {
    $x++;
    echo "$x <br>";
} while ( $x <= 20 );

//foreach
$web = array(
    'dynamic'    => 'PHP',
    'styling'    => 'CSS',
    'behavior'    => 'Javascript'
);
 
foreach ( $web as $key => $value ) {
    echo "$key is $value <br>";
}

echo json_encode($web);
?>