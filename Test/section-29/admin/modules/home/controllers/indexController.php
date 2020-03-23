<?php

function construct(){
    load_model('index');
}

function indexAction(){
    if(is_login()){
        $username = $_SESSION['username'];
        $user = get_info_user($username);
        $fullname = $user['fullname'];
        $url = $user['url'];
        $data['fullname'] = $fullname;
        $data['url'] = $url;

        load_view('index',$data);
    }
    else{
        load_view('index');
    }
    
}   