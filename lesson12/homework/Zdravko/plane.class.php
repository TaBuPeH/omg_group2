<?php

require_once "vehicle.class.php";

class Plane extends Vehicle
{
	public $company;
	public $height_meters;
	public $ticketPrice;
	public function __construct($a, $b,$com, $height, $tp)
	{
		$this->company = $com;
		$this->height_meters = $height;
		$this->ticketPrice = $tp;
		parent::__construct($a, $b);
	}
		public function drop($dropMeters)
	{
		$this->height_meters = $this->height_meters - $dropMeters; 
		$this->position = $this->position + $distance; 
	}
}
?>