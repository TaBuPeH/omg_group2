 <?php


require_once("hero.class.php");
require_once('db.class.php');


$attacker = $_SESSION['heroes'][$_GET['attacker']];
$defender = $_SESSION['heroes'][$_GET['defender']];

//$warrHP = $_SESSION['heroes'][$_GET['warrHP']];
//$healerHP = $_SESSION['heroes'][$_GET['healerHP']];

		
		$hp_beforeHeal=$attacker->getHP();

		
		$attacker->RestoreHp();
		print_r($attacker->getHP());
		$hp_afterHeal=$attacker->getHP();
		
		$result= $hp_afterHeal - $hp_beforeHeal;
		
		
		
		$_SESSION['dmg_dealt'][0] = $result;
		
		
		
	
 
 

 ?>

