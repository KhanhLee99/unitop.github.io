<?php
function check_empty($field)
{
    global $error;
    if(!empty($error[$field])){
        return $error[$field];
    }
    return false;
}

function get_value($field)
{
    global $error;
    global $$field;
    if(empty($error[$field])){
        return $$field;
    }
    return false;
}

