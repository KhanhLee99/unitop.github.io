<?php
function get_gender($gender){
    $list_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ'
    );
    if(array_key_exists($gender, $list_gender)){
        return $list_gender[$gender];
    }
}

function get_users($start = "1",$num_per_page = "10", $where =""){
    if(!empty($where)){
        $where = "WHERE {$where}";
    }
    $list_user = db_fetch_array("SELECT * FROM `tbl_user` {$where} LIMIT {$start},{$num_per_page}");
    return $list_user;
}