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
	public function load($weight)
	{
		$this->load = $this->load + $weight;
	}
	public function unload($weight)
	{
		$this->load = $this->load - $weight;
	}
}
?>