<?php

/*
class automobile
{
	public $brand;
	public $color;
	
	public $seats;
	public $doors;
	
	public $year;
	public $price; 
	
	public $km = 0;
	
	public function __construct($a,$b,$s,$d,$y,$p)
	{
		$this->brand = $a;
		$this->color = $b;
		$this->seats = $s;
		$this->doors = $d;
		$this->year = $y;
		$this->price = $p;
	}
	
	public function move($x)
	{
		//$cars[0]->km = $cars[0]->km + 30; 
		//$cars[1]->km = $cars[1]->km + 30; 
		$this->km = $this->km + $x;
	}
}



$cars[0] = new automobile('maserati',"white",5,3,2014,107000);
$cars[1] = new automobile('VW',"Grey",5,5,1991,500);

/*
$cars[0]->brand = "maserati";
$cars[0]->color = "white";
$cars[0]->seats = 5;
$cars[0]->doors = 3;
$cars[0]->year = 2014;
$cars[0]->price = 107000;



$cars[1]->brand = "VW";
$cars[1]->color = "Grey";
$cars[1]->seats = 5;
$cars[1]->doors = 5;
$cars[1]->year = 1991;
$cars[1]->price = 500;

echo "<pre>";
print_r($cars);

foreach($cars as $key=>$car)
{
	$cars[$key]->price = $cars[$key]->price*0.85;
}

//$cars[0]->km = $cars[0]->km + 30; 
$cars[0]->move(30);
//$cars[1]->km = $cars[1]->km + 30; 
$cars[1]->move(20);
echo "<pre>";
print_r($cars);
 * 
 * */
 
 
 
// public / private / protected


require_once "car.class.php";
require_once "truck.class.php";



$car = new Car(20,'red',5);

$truck = new Truck(50,'yello',2200);

$vehicle = new Vehicle(20,'blue');

echo "<pre>";
print_r($car);
print_r($truck);
print_r($vehicle);

die('I am dead');





$vehicle = new Vehicle(20,'red');
$vehicle->move(20);
$vehicle->move(30);
$vehicle->move(15);
echo "<pre>";
print_r($vehicle);