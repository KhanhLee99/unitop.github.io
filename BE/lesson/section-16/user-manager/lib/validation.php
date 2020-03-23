<?php
function check_empty($label_field){
global $error;
if(!empty($error[$label_field])){
    echo $error[$label_field];
}
}

function get_value($label_field){
    global $error;
    global $$label_field;
    if(empty($error[$label_field])){
        echo $$label_field;
    }
}
?>