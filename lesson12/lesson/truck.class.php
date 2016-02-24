<?php

require_once "vehicle.class.php";

class Truck extends Vehicle
{
	public $load;
	public function __construct($a, $b, $l)
	{
		$this->load = $l;
		parent::__construct($a, $b);
	}
}
?>