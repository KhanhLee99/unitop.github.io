<?php
function check_login($username, $password){
    global $list_users;
    foreach($list_users as  $user){
         if($user['username'] == $username && $user['password'] == md5($password)){
             return true;
         }
     }
     return false;
}
function is_login(){
    if(isset($_SESSION['is_login'])){
        return true;
    }
    return false;
}
function get_info_user($field){
    if(is_login()){
        global $list_users;
        foreach($list_users as  $user){
            if($user['username'] == $_SESSION['user_login']){
                if(array_key_exists($field, $user)){
                    return $user[$field];
                }      
            }
        }
    }
    return false;
}
