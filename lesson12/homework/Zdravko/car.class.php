<?php

require_once "vehicle.class.php";

class Car extends Vehicle
{
	public $seats;
	public $passanger;
	public function __construct($a, $b, $s, $pas)
	{
		$this->seats = $s;
		$this->passanger= $pas;
		parent::__construct($a, $b);
	}
	
	public function loadPass($pass){
		
		$this->passanger = $this->passanger + $pass;
		
	}
	public function unloadPass($pass){
		
		$this->passanger = $this->passanger - $pass;
		
	}
}
?>