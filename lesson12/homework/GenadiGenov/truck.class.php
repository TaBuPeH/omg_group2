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
	
	public function load($kg)
	{
		$this->load = $this->load + $kg;
	}
	
	public function unload($kg)
	{
		$this->load = $this->load - $kg;
	}
}
?>