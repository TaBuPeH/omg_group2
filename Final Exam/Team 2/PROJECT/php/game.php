<?php
require_once "db.class.php";

class lifeform
{
	protected $hp;
	protected $dmg;
	protected $str;
	protected $dex;
	protected $vit;
	protected $int_;
	protected $critChance;
	
	public function attack(&$target)
	{
		$critModifier = 1;
		
		// if( rand(0,100) < $this->critChance)
		// {
			// $critModifier = 2;
		// }
		// if( rand(0,1000) == 666)
		// {
			// $critModifier = 10;
		// }
		$remaining = $target->getHP() - $this->dmg*$critModifier ;
		$target->setHP($remaining);		
	}
	
	// public function setCritChance($c)
	// {
		// $this->critChance = $c;
	// }
	
	// public function getCritChance()
	// {
		// return $this->critChance;
	// }
	
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


// class human extends lifeform
// {
	// protected $utilityDamage;
	
	// public function setUtilityDamage($s)
	// {
		// $this->utilityDamage = $s;
	// }
	
	// public function getUtilityDamage()
	// {
		// return $this->utilityDamage;
	// }
	
	// public function useBelt()
	// {
		// $this->dmg = $this->dmg*$this->utilityDamage;
	// }
// }

// class kryptonian extends lifeform
// {
	// protected $heatRay;
	
	// public function setHeatRay($h)
	// {
		// $this->heatRay = $h;
	// }
	
	// public function getHeatRay()
	// {
		// return $this->heatRay;
	// }
	
	// public function useHeatRay(&$target)
	// {
		// $remaining = $target->getHP() - $this->heatRay ;
		// $target->setHP($remaining);		
	// }
// }

?>
