<?php

$phone = Array(
   
   		0=> Array(
			"description" =>Array(
				'year'=>'2014',
				'brand'=>'Iphone',
				'model' =>'A1533'
				'name'=>'5s'
			),
			"price" => 900,
			"quantity" => 12
		),
		
		
		1=> Array(
			"description" =>Array(
				'year'=>'2015',
				'brand'=>'samsung',
				'model' =>'SM-G900F'
				'name'=>'Galaxy S5'
			),
			"price" => 720,
			"quantity" => 2
		),
		
		
		2=> Array(
			"description" =>Array(
				'year'=>'2014',
				'brand'=>'Lenovo',
				'model' =>'k920'
				'name'=>'Vibe z2 pro'
			),
			"price" => 55,
			"quantity" => 3
		),
		
		
  	$store[3]['description']['year'] = '2016';
	$store[3]['description']['brand'] = 'Samsung';
	$store[3]['description']['model'] = 'Galaxy S7';
	$store[3]['description']['name'] = 'G930F';
	$store[3]['quantity'] = 1;
	$store[3]['price'] = 1240;
	
	$store[4]['description']['year'] = '2015';
	$store[4]['description']['brand'] = 'HTC';
	$store[4]['description']['model'] = 'M8';
	$store[4]['description']['name'] = 'HTC One M8'
	$store[4]['quantity'] = 2;
	$store[4]['price'] = 710;
	
	$store[5]['description']['year'] = '2016';
	$store[5]['description']['brand'] = 'Alcatel';
	$store[5]['description']['model'] = '4s';
	$store[5]['description']['name'] = 'Alcatel Idol 4s'
	$store[5]['quantity'] = 3;
	$store[5]['price'] = 800;
	
	echo"<pre>";
	
	print_r($store);
   );





?>