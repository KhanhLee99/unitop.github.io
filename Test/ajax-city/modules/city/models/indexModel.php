<?php

function get_list_city() {
    $result = db_fetch_array("SELECT * FROM `tbl_city`");
    return $result;
}

function get_district_by_city_id($city_id){
    $result = db_fetch_array("SELECT * FROM `tbl_district` WHERE `city_id` = {$city_id} ");
    return $result;
}