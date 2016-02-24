<?php


require_once "car.class.php";
require_once "truck.class.php";
require_once "plane.class.php";


$car = new Car(20,'red',5);

$truck = new Truck(50,'yellow',2200);

$plane = new Plane(1000,'white',200,9500);

$vehicle = new Vehicle(20,'blue');

echo "<pre>";
print_r($car);
print_r($truck);
print_r($plane);
print_r($vehicle);

echo "<br>";
echo "loading truck with 300 weight<br><br>";

$truck->load(300);
print_r($truck);

echo "unloading truck with 800 weight<br><br>";

$truck->unload(800);
print_r($truck);

echo "loading car with 5 passengers<br><br>";
$car->load(5);
print_r($car);

echo "unloading car with 3 passengers<br><br>";
$car->unload(3);
print_r($car);
?>