<?php
require_once ('mechanical.php');

class autobot extends mechanical

{
	var $shapechange;
	var $isEvil = 0;
	
	function setStats($z='', $x='', $c='', $v='', $b='')
		{
			$this->setStrength($z);
			$this->setStamina($x);
			$this->setIntelligence($c);
			$this->setArmor($v);
			$this->setDamage($b);
			$this->setSpeed();
			$this->setDmgRes();
			$this->setShapechange();
		}	
							
	
	function setShapechange()
	{
		$this->shapechange = $this->intelligence * 2;
	}
	function getShapechange()
	{
		return $this->shapechange;
	}
	function newArmor()
	{
		if (isset ($this->armor))
		{
			$this->armor = $this->armor + $this->shapechange/2;
		}
	}
	function newSpeed()
	{
		if (isset ($this->speed))
		{
			$this->speed = $this->speed + $this->shapechange*2;
		}
	}
	function newStamina()
	{
		if (isset ($this->stamina))
		{
			$this->stamina = $this->stamina + $this->shapechange;
		}
	}	
	function newStrength()
	{
		if (isset ($this->strength))
		{
			$this->strength = $this->strength + $this->shapechange*3;
		}
	}
	function newDamage()
	{
		if (isset ($this->damage))
		{
			$this->damage = $this->strength/2 + $this->shapechange/4;
		}
	}


}



?>
