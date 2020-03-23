<?php 
function get_info_user($username){
    $user = db_fetch_row("SELECT * FROM `tbl_admin_big` WHERE `username` = '{$username}'");
    $user['url'] = base_url("?mod=users&action=update&id={$user['id']}");
    return $user;
}
?>