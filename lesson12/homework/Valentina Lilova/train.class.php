<?php

require_once("vehicle.class.php");

class Train extends Vehicle
{
	public $vagons;
	public $seats_per_vagon;
	public $seats;
	public $passengers = 0;
	
	public function __construct($v, $spv, $f, $c)
	{
		$this->vagons = $v;
		$this->seats_per_vagon = $spv;
		$this->seats = $v * $spv;
		
		parent::__construct($f , $c);
	}
	
	public function move($distance)
	{
		$result = parent::move($distance);
		if($result == false) 
		{
			echo 'Nema nafta! Vsichki da slizat.';
			$this->passengers = 0;
		}
	}
	
	public function get_on($p)
	{
		$this->passengers = $this->passengers + $p;
		$this->seats = $this->seats - $p;
		
		while ($this->seats < 0)
		{
			echo 'Trebvat oshte vagoni!';
			$this->vagons++;
			$this->seats = $this->seats + $this->seats_per_vagon;
		}
	}
	
	public function get_off($p)
	{
		$this->seats = $this->seats + $p;
		$this->passengers = $this->passengers - $p;
	}
	
}

?>