<?php

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `tbl_user`");
    return $result;
}

function get_user_by_id($id){
    $user = db_fetch_array("SELECT * FROM `tbl_user` WHERE `user_id` = {$id}");
    return $user;
}