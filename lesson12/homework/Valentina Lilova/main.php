<?php

require_once "train.class.php";

//($v, $spv, $f, $c)
$train = new Train(3, 20, 30, 'red');
echo "<pre>";
print_r($train);

$train->get_on(15);
print_r($train);
$train->move(10);
$train->get_on(35);
print_r($train);

$train->get_off(5);
$train->move(50);
print_r($train);

$train->get_on(30);
$train->move(100);
print_r($train);

$train->move(1000);
print_r($train);


die('I am dead');

?>