<?php

$notifi = "Hello ";
$username = "admin";

echo "$notifi <br>";
echo "$username <br>";

echo "<br>---------------<br>";

$username_strong = "<strong>$username</strong>";

//$notifi .= $username_strong;

$notifi .= "<strong>$username</strong>";

echo $notifi;