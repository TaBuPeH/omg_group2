<?php

require_once('bd.php');



$q ="Select * from products";
$products = $bd->fetchArray($q);

$q ="Select * from shops";
$shops = $bd->fetchArray($q);


echo "<pre>";
print_r($products);
print_r($shops);
