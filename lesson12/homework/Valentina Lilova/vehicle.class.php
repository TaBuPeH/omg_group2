<?php

class Vehicle
{
	public $color;
	public $fuel;
	public $position = 0;
	
	public function __construct($a, $b)
	{
		$this->fuel = $a;
		$this->color = $b;
	}
	
	public function move($distance)
	{
		if($this->fuel - $distance/10 <= 0)
		{
			$this->position = $this->position + $this->fuel*10; // kolkoto gorivo mu e ostanalo
			$this->fuel = 0;
			
			return false;
		}
		else
		{
			$this->fuel = $this->fuel - $distance/10;
			$this->position = $this->position + $distance; 
			
			return true;
		}
	}
/*	
	public function full_up($f)
	{
		$this->fuel = $this->fuel + $f;
	}
*/
}

?>