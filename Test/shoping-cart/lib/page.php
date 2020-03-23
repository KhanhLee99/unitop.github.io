<?php
//lấy page theo id
function get_page($id){
    global $list_pages;
    if(array_key_exists($id, $list_pages)){
        return $list_pages[$id];
    }
    return false;
}