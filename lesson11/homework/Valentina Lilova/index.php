<?php
	
   $fruits = Array(
   
   		'bananas'=> Array(
			"price" => 0.50,
			"quantity" =>20,
			"freshness" => Array(
				'received' =>'18.02.16',
				'expirationDate'=>'23.02.16',
				'eatable'=>'yes'
			)
		),
		
		'coconuts'=> Array(
			"price" => 1.50,
			"quantity" =>7,
			"freshness" => Array(
				'received' =>'15.02.16',
				'expirationDate'=>'25.02.16',
				'eatable'=>'yes'
			)
		),
  
		'oranges'=> Array(
			"price" => 0.35,
			"quantity" =>30,
			"freshness" => Array(
				'received' =>'11.02.16',
				'expirationDate'=>'17.02.16',
				'eatable'=>'no'
			)
		),
		
		'apples'=> Array(
			"price" => 00.40,
			"quantity" =>25,
			"freshness" => Array(
				'received' =>'12.02.16',
				'expirationDate'=>'22.02.16',
				'eatable'=>'yes'
			)
		),
		
		'mangos'=> Array(
			"price" => 2,
			"quantity" =>25,
			"freshness" => Array(
				'received' =>'16.02.16',
				'expirationDate'=>'22.02.16',
				'eatable'=>'yes'
			)
		)
   );
  
   foreach($fruits as $key=>$value)
   {
   		if ($value['freshness']['eatable']=='yes') {
			echo 'The '.$key.' are '.$value['price'].' $ and are eatable until '.$value['freshness']['expirationDate']."<br>";
		}
   };
   
	echo "<pre>";
	print_r($fruits);
?>
