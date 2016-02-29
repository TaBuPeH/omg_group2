<?php


class lifeform
{
	protected $hp;
	protected $dmg;
	
	protected $critChance;
	
	public function attack(&$target)
	{
		// $superman->hp;
		// $remaining = $superman->hp - $batman->hp = 100-10
		
		$critModifier = 1;
		
		if( rand(0,100) < $this->critChance)
		{
			$critModifier = 2;
		}
		if( rand(0,1000) == 666)
		{
			$critModifier = 10;
		}
		$remaining = $target->getHP() - $this->dmg*$critModifier;
		// $superman->setHP(90);
		$target->setHP($remaining);		
	}
	
	public function setCritChance($c)
	{
		$this->critChance = $c;
	}
	
	public function getCritChance()
	{
		return $this->critChance;
	}
	
	public function getHP()
	{
		return $this->hp;
	}
	
	public function setHP($h)
	{
		$this->hp = $h;
	}
	
	public function __construct($a, $b)
	{
		$this->hp = $a;
		$this->dmg = $b;
	}
}

?>