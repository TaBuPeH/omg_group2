<?php

require_once("hero.class.php");
require_once('db.class.php');


$attacker = $_SESSION['heroes'][$_GET['attacker']];
$defender = $_SESSION['heroes'][$_GET['defender']];

//$warrHP = $_SESSION['heroes'][$_GET['warrHP']];
//$healerHP = $_SESSION['heroes'][$_GET['healerHP']];
  
	$hp_beforeattack=$defender->getHP();

		
		
		
		$attacker->UsePowerHit($defender);
		
 
		
		

		$hp_afterattack=$defender->getHP();
		
		$result= $hp_afterattack - $hp_beforeattack;
		
		if($hp_afterattack <=0){
			
			echo "-100";
		}else
		{	
			
			
				
			print_r($hp_afterattack);
			
		}
		
		
		$_SESSION['dmg_dealt'][0] = $result;
		
		
 //print_r($defender->getHP());

?>

