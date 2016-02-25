<?php


class Vehicle
{
	protected $seats = 5;
	private $fuel = 0;
	
}

class Car extends Vehicle
{
	public function setSeats($s)
	{
		$this->seats = $s;
	}
	
	public function getSeats()
	{
		return $this->seats;
	}
	
	public function setFuel($s)
	{
		$this->fuel = $s;
	}
	
	public function getFuel()
	{
		return $this->fuel;
	}
}


$car = new Car;

echo "<pre>";


$car->setFuel(30);
$car->getFuel();
print_r($car);

$car->fuel = $car->fuel - 20;

$car->setSeats(10);
echo $car->getSeats();

exit;


















/*






class Vehicle
{
	
	public $color = 'blue';
	private $engine = '5000HP';
	protected $seats = 120;
	
	public function setSeats($s)
	{
		$this->seats = $s-1;
	}
	
	public function getSeats()
	{
		return $this->seats;
	}
	
	public function setColor($s)
	{
		$this->color = $s;
	}
	
	public function getColor()
	{
		return $this->color;
	}
	
	protected function setEngine()
	{
		$this->runEngine();
	}
	
	private function runEngine()
	{
		
	}
}

class Car extends Vehicle
{
	function setSeats($seats)
	{
		$this->seats = $seats;
		$this->setEngine();
	}
}

class Truck extends Vehicle
{
	function setSeats($seats)
	{
		$this->seats = $seats;
	}
}


$car = new Car();
$car->color = 'red';
$car->setEngine('2000');

echo "<pre>";
print_r($car);
exit;
$car->engine = '1000HP';

*/

