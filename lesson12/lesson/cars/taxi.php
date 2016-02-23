<?php

	require_once("car.php");

class Taxi extends Car
{
	public $number;
	public $money;
	public $price_per_km;
	
	public function __construct($a, $b , $num, $perKm, $mon, $se)
	{
		$this->number = $num;
		$this->price_per_km = $perKm;
		$this->money = $mon;
		
		parent::__construct($a, $b , $se);
	}
	
	public function move($distance)
	{
		// $this->money = 0 + 10*0.65  = 6.5
		$result = parent::move($distance);
		if($result == true)
		{
			$this->money  = $this->money + $distance*$this->price_per_km;
		}
		else {
			echo "Nema nafta";
		}
	}
}

?>