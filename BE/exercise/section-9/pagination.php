<?php

function pagination($total_rows, $num_per_page) {
    if ($total_rows > 0 && $num_per_page > 0) {
        $num_page = 0;
        if ($total_rows % $num_per_page == 0) {
            $num_page = $total_rows / $num_per_page;
        } else {
            $num_page = floor($total_rows / $num_per_page) + 1;
        }
        return $num_page;
    }
    return false;
}

$num_page = pagination(15, 4);
echo $num_page;