<?php

$store = Array(
   
   		0=> Array(
			"description" =>Array(
				'year'=>'2012',
				'brand'=>'puma',
				'model' =>'red-stripes',
				'name'=>'picnic'
			),
			"price" => 40,
			"quantity" => 1
		),
		
		
		1=> Array(
			"description" =>Array(
				'year'=>'2009',
				'brand'=>'warrior',
				'model' =>'black',
				'name'=>'predator'
			),
			"price" => 100,
			"quantity" => 2
		),
		
		
		2=> Array(
			"description" =>Array(
				'year'=>'2014',
				'brand'=>'lion',
				'model' =>'new edition',
				'name'=>'lion'
			),
			"price" => 55,
			"quantity" => 3
		)
		
	);
		
  	$x['description']['year'] = '2012';
	$x['description']['brand'] = 'puma';
	$x['description']['model'] = 'red-stripes';
	$x['description']['name'] = 'picnic';
	$x['quantity'] = 1;
	$x['price'] = 40;
	
	$store[] = $x;
	
	$store[3]['description']['year'] = '2009';
	$store[3]['description']['brand'] = 'warrior';
	$store[3]['description']['model'] = 'black';
	$store[3]['description']['name'] = 'predator';
	$store[3]['quantity'] = 2;
	$store[3]['price'] = 100;
	
	$store[4]['description']['year'] = '2014';
	$store[4]['description']['brand'] = 'lion';
	$store[4]['description']['model'] = 'new edition';
	$store[4]['description']['name'] = 'lion';
	$store[4]['quantity'] = 3;
	$store[4]['price'] = 55;
	
	echo "<pre>";
	print_r($store);
  





?>