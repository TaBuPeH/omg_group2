<?php

require_once "vehicle.class.php";

class Plane extends Vehicle
{
	public $seats;
	public $maximumPpl;  //standing + sitting ppl
	public function __construct($a, $b, $s, $max)
	{
		$this->maximumPpl = $max;
		$this->seats = $s;
		parent::__construct($a, $b);
	}

	public function load($people)
	{
		$this->maximumPpl = $this->maximumPpl - $people;

	}

	public function unload($people)
	{
		$this->maximumPpl = $this->maximumPpl + $people;

	}

}
?>