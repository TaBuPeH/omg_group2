<?php
	
	require_once("car.php");
	require_once("truck.php");
	require_once("taxi.php");
	/*
	$vehicle = new Vehicle(20,'red');
	echo "<pre>";
	print_r($vehicle);
	
	
	$car = new Car(30, 'blue', 3);
	echo "<pre>";
	print_r($car);
	$car->move(40);
	
	$truck = new Truck(50, 'Green');
	echo "<pre>";
	print_r($truck);*/
	
			   // fuel, color, number , perKm, startingMoney, seats
	$taxi = new Taxi(30, 'Black & Yellow','6665', '0.65', 0 , 4);
	$taxi2 = new Taxi(20, 'Black & Yellow','6155', '0.75', 0 , 4);
	echo "<pre>";
	print_r($taxi);
	
	$taxi->move(10);
	echo "<pre>";
	print_r($taxi);
	
	$taxi->move(6);
	echo "<pre>";
	print_r($taxi);
	
	$taxi->move(200);
	echo "<pre>";
	print_r($taxi);
	
	$taxi->move(83);
	
	echo "<pre>";
	print_r($taxi);
	
?>