<?php

require_once("kryptonian.class.php");
require_once("human.class.php");

$batman = new human(100,10);
$batman->setUtilityDamage(1.2);
$batman->setCritChance(20);

$superman = new kryptonian(100,10); 
$superman->setHeatRay(8);
$superman->setCritChance(15);


$winner = 'Noone';
$i = 0;
echo "<pre>";
do 
{
	if ($i%2==1)
	{
		$batman->useBelt();
		$superman->useHeatRay($batman);
		
		echo('Superattacks executed.'."<br>");
		
		if (($superman->getHP()<=0)&&($batman->getHP()>0)) $winner = 'Batman';
		if (($batman->getHP()<=0)&&($superman->getHP()>0)) $winner = 'Superman';
		
	}
	else
	{
		$batman->attack($superman);
		$superman->attack($batman);
		
		if (($superman->getHP()<=0)&&($batman->getHP()>0)) $winner = 'Batman';
		if (($batman->getHP()<=0)&&($superman->getHP()>0)) $winner = 'Superman';
		
	}
	
	$i++;
	
	print_r($batman);
	print_r($superman);
	
} while ($winner == 'Noone');

echo("$winner wins!");

?>