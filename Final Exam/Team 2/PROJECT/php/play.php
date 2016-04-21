<?php

require_once("hero.class.php");
require_once('db.class.php');


$attacker = $_SESSION['heroes'][$_GET['attacker']];
$defender = $_SESSION['heroes'][$_GET['defender']];

 print_r($attacker);
/*
require_once "game.php";

$warrior = new warrior(100,10);
$warrior->setPowerHit(1.4);


$healer = new healer(120,8); 
$healer->setRestoreHp(20);
echo "<pre>";
print_r($healer);
print_r($warrior);
?>
<?php
echo "<pre>";
print_r($healer);
print_r($warrior);*/
?>

