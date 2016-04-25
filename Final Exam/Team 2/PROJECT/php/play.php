<?php

require_once("hero.class.php");
require_once('db.class.php');
//require_once("game.php");

$attacker = $_SESSION['heroes'][$_GET['attacker']];
$defender = $_SESSION['heroes'][$_GET['defender']];
$attacker->attack($defender);
 
 //print_r($defender->getHP());

?>

