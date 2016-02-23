<?php

require_once "vehicle.class.php";

class Plane extends Vehicle
{
	public $seats;
	public $distance;
	public function __construct($a, $b, $s, $d)
	{
		$this->seats = $s;
		$this->distance = $d;
		parent::__construct($a, $b);
	}

}
?>