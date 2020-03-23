<?php

function total($n) {
    $total = 0;

    for ($i = 3; $i <= $n; $i += 3) {
        $total += 1 / $i;
    }
    return $total;
}

echo "Result: ".total(10);