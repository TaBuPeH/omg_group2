<?php

require_once("hero.class.php");
require_once('db.class.php');


$attacker = $_SESSION['heroes'][$_GET['attacker']];
$defender = $_SESSION['heroes'][$_GET['defender']];

//$warrHP = $_SESSION['heroes'][$_GET['warrHP']];
//$healerHP = $_SESSION['heroes'][$_GET['healerHP']];
if($attacker->getHP() && $defender->getHP() > 0)
	{   
		$winner=0;
		$attacker->UsePowerHit($defender);
		print_r($defender->getHP());
	}
else 
	{
		$winner=1;
	}
 
 //print_r($defender->getHP());

?>

