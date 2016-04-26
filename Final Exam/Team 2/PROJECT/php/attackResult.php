<?php
require_once("hero.class.php");
require_once('db.class.php');


$dmg_dealt = $_SESSION['dmg_dealt'][$_GET['dmg_dealt']];

print_r($dmg_dealt);


?>