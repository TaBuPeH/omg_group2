<?php

<?php

require_once "car.class.php";
require_once "truck.class.php";
require_once "plane.class.php";
require_once "bus.class.php";



$car = new Car(27,'red',7);

$truck = new Truck(35,'brightblue',300);

$plane = new Plane(1000,'grey',200,9500,'Toronto');

$bus = new Plane(50,'grey',25, 60);


echo "<pre>";
print_r($car);
print_r($truck);
print_r($bus);
print_r($plane);


$truck->load(300);
print_r($truck);
$truck->load(300);
print_r($truck);
$truck->unload(200);
print_r($truck);


$car->load(5);
print_r($car);
$car->unload(2);
print_r($car);


$bus->load(5);
print_r($bus);
$bus->load(10);
print_r($bus);
$bus->load(2);
print_r($bus);
$bus->load(3);
print_r($bus);
$bus->load(1);
print_r($bus);
$bus->unload(13);
print_r($bus);
$bus->load(7);
print_r($bus);




?>