<?php

require_once "vehicle.class.php";

class Car extends Vehicle
{
	public $seats;
	
	public function __construct($a, $b, $s)
	{
		$this->seats = $s;
		parent::__construct($a, $b);
	}
}
?>