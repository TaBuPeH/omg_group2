// <?php


require_once("hero.class.php");
require_once('db.class.php');


$attacker = $_SESSION['heroes'][$_GET['attacker']];
$defender = $_SESSION['heroes'][$_GET['defender']];

//$warrHP = $_SESSION['heroes'][$_GET['warrHP']];
//$healerHP = $_SESSION['heroes'][$_GET['healerHP']];
if($attacker->getHP() && $defender->getHP() > 0)
	{   
		$winner=0;
		$attacker->rest();
		print_r($attacker->getHP());
	}
else 
	{
		$winner=1;
	}
 
 //print_r($defender->getHP());




// require_once("hero.class.php");
// require_once('db.class.php');


// $attacker = $_SESSION['heroes'][$_GET['attacker']];
// $defender = $_SESSION['heroes'][$_GET['defender']];

		
		// $attacker->rest();
		// //$attacker->useRestoreHp();
		// print_r($attacker->getHP());
	

// ?>

