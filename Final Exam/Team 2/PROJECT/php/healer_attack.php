<?php

require_once("hero.class.php");
require_once('db.class.php');

$warrior = $_SESSION['heroes'][$_GET['warrior']];
$healer = $_SESSION['heroes'][$_GET['healer']];
$healer->attack($warrior);

//$attacker->attack($defender);
 print_r($warrior->getHP());
?>

