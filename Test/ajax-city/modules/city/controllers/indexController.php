<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $list_city = get_list_city();
    
    $data['list_city'] = $list_city;
    load_view('index', $data);
}

function ajaxAction(){
    $city_id = $_POST['city_id'];
    $district = get_district_by_city_id($city_id);

    $data = array(
        'district' => $district,
    );

    echo json_encode($data);
}