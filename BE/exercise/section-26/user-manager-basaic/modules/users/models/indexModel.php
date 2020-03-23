<?php

function get_list_user()
{
    $list_user = db_fetch_array("SELECT * FROM `tbl_user`");
    return $list_user;
}

function get_user_by_id($id)
{
    $user = db_fetch_row("SELECT * FROM `tbl_user` WHERE `user_id` = {$id}");
    return $user;   
}
