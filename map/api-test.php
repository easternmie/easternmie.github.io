<?php
header('Content-Type: application/json');
$data = array(
    array(
        "title" => "BANGI DIALYSIS CENTRE SDN BHD",
        "lat" => 2.953110,
        "lng"=> 101.758544,
        "description"=> "Copenhagen is the capital of Denmark and its most populous city",
        "img"=>"http://earthworm.net/wp-content/uploads/2015/04/twitter2-120x120.jpg"
    ),
    array(
        "title"=> "IBNU AL-NAFIS DIALYSIS CENTRE",
        "lat"=> 2.937601,
        "lng"=> 101.774852,
        "description"=> "Copenhagen is the capital of Denmark and its most populous city",
        "img"=>"http://earthworm.net/wp-content/uploads/2015/04/twitter2-120x120.jpg"
    ),
    array(
		"title" =>"SURIYA DIALYSIS CENTRE",
		"lat" =>2.963048,
		"lng" =>101.750985,
		"description" =>"Copenhagen is the capital of Denmark and its most populous city",
		"img" => "http://earthworm.net/wp-content/uploads/2015/04/twitter2-120x120.jpg"
    ),
    array(
		"title" =>"PUSAT RAWATAN DIALISIS HIDAYAH SDN BHD",
		"lat" =>2.939920,
		"lng" =>101.675552,
		"description" =>"Copenhagen is the capital of Denmark and its most populous city",
		"img" => "http://earthworm.net/wp-content/uploads/2015/04/twitter2-120x120.jpg"
    ),
    array(
		"title" =>"BSC MEDI VENTURE SDN. BHD.",
		"lat" =>2.990127,
		"lng" =>101.777069,
		"description" =>"Copenhagen is the capital of Denmark and its most populous city",
		"img" => "http://earthworm.net/wp-content/uploads/2015/04/twitter2-120x120.jpg"
    ),
    array(
		"title" =>"KPJ KAJANG SPECIALIST HOSPITAL SDN BHD",
		"lat" =>2.999896,
		"lng" =>101.785752,
		"description" =>"Copenhagen is the capital of Denmark and its most populous city",
		"img" => "http://earthworm.net/wp-content/uploads/2015/04/twitter2-120x120.jpg"
    )
);
echo json_encode($data);
