<?php

require_once("hero.class.php");
require_once('db.class.php');
//require_once("game.php");

$attacker = $_SESSION['heroes'][$_GET['attacker']];
$defender = $_SESSION['heroes'][$_GET['defender']];

//$warrHP = $_SESSION['heroes'][$_GET['warrHP']];
//$healerHP = $_SESSION['heroes'][$_GET['healerHP']];
//
$hp_beforeattack=$defender->getHP();
if($hp_beforeattack >1){
		

		$attacker->attack($defender);
		
		$hp_afterattack=$defender->getHP();
		
		$result= $hp_afterattack - $hp_beforeattack;
		
		$_SESSION['dmg_dealt'][0] = $result;
		
		
		if($hp_afterattack <=0){
			
			echo "-100";
		}else
			{
				
				print_r($hp_afterattack);
		
			}
}
		else
		{
			
			echo "-100";
		
		}
 
 //print_r($defender->getHP());

?>

