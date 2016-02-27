<?php

require_once "vehicle.class.php";

class Plane extends Vehicle
{
	public $seats;
	public $distance;
	public $destination;
	public function __construct($a, $b, $s, $d, $dest)
	{
		$this->destination = $dest;
		$this->seats = $s;
		$this->distance = $d;
		parent::__construct($a, $b);
	}

}
?>