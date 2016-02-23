<?php

$store = Array(
   
   		0=> Array(
			"description" =>Array(
				'year'=>'2012',
				'brand'=>'puma',
				'model' =>'red-stripes'
				'name'=>'picnic'
			),
			"price" => 40,
			"quantity" => 1
		),
		
		
		1=> Array(
			"description" =>Array(
				'year'=>'2009',
				'brand'=>'warrior',
				'model' =>'black'
				'name'=>'predator'
			),
			"price" => 100,
			"quantity" => 2
		),
		
		
		2=> Array(
			"description" =>Array(
				'year'=>'2014',
				'brand'=>'lion',
				'model' =>'new edition'
				'name'=>'lion'
			),
			"price" => 55,
			"quantity" => 3
		),
		
		
  	$store[2]['description']['year'] = '2012';
	$store[2]['description']['brand'] = 'puma';
	$store[2]['description']['model'] = 'red-stripes';
	$store[2]['description']['name'] = 'picnic';
	$store[2]['quantity'] = 1;
	$store[2]['price'] = 40;
	
	$store[3]['description']['year'] = '2009';
	$store[3]['description']['brand'] = 'warrior';
	$store[3]['description']['model'] = 'black';
	$store[3]['description']['name'] = 'predator'
	$store[3]['quantity'] = 2;
	$store[3]['price'] = 100;
	
	$store[4]['description']['year'] = '2014';
	$store[4]['description']['brand'] = 'lion';
	$store[4]['description']['model'] = 'new edition';
	$store[4]['description']['name'] = 'lion'
	$store[4]['quantity'] = 3;
	$store[4]['price'] = 55;
	print_r($store);
   );





?>