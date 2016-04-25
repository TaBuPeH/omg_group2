<?php

require_once("hero.class.php");
require_once('db.class.php');

$warrior = $_SESSION['heroes'][$_GET['warrior']];
$healer = $_SESSION['heroes'][$_GET['healer']];
$warrior->attack($healer);
//$attacker->attack($defender);
 print_r($healer->getHP());
 //$attacker = $_SESSION['heroes'][$_GET['attacker']];
?>

