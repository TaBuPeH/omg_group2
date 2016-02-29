<?php


class lifeform
{
	protected $hp;
	protected $dmg;
	public $speed;
	
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
		$remaining = $target->getHP() - $this->dmg*$critModifier ;
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
	
	public function __construct($a, $b ,$s)
	{
		$this->hp = $a;
		$this->dmg = $b;
		$this->speed=$s;
	}
}


class human extends lifeform
{
	protected $utilityDamage;
	protected $BatarangsDamage;
	
	public function setUtilityDamage($u)
	{
		$this->utilityDamage = $u;
	}
	
	public function getUtilityDamage()
	{
		return $this->utilityDamage;
	}

	public function setBatarangsDamage($p)
	{
		$this->BatarangsDamage = $p;
	}
	
	public function getBatarangsDamage()
	{
		return $this->BatarangsDamage;
	}
	
	public function useBelt()
	{
		$this->dmg = $this->dmg*$this->utilityDamage;
	}

	public function  useBatarangs()
	{
		$this->dmg=$this->dmg+$this->BatarangsDamage;
	}
}

class kryptonian extends lifeform
{
	protected $heatRay;
	
	public function setHeatRay($h)
	{
		$this->heatRay = $h;
	}
	
	public function getHeatRay()
	{
		return $this->heatRay;
	}
	
	public function useHeatRay(&$target)
	{
		$remaining = $target->getHP() - $this->heatRay ;
		// $superman->setHP(90);
		$target->setHP($remaining);		
	}
}


$batman = new human(100,10,4);
$batman->setUtilityDamage(1.2);
$batman->setBatarangsDamage(4);
$batman->setCritChance(10);

$superman = new kryptonian(300,10,3); 
$superman->setHeatRay(18);
$superman->setCritChance(20);
do{
if($batman->speed > $superman->speed)
{
	$batman->attack($superman);
	$superman->attack($batman);
	$batman->useBelt();
	$batman->useBatarangs();
	$superman->useHeatRay($batman);
}
elseif($batman->speed == $superman->speed)
{
	do{
				$batman = rand(0,100);
				$superman = rand(0,100);
			}
			while($batman == $superman);
	
			if($batman > $superman)
			{
		
				$batman->attack($superman);
				$superman->attack($batman);
				$batman->useBelt();
				$batman->useBatarangs();
				$superman->useHeatRay($batman);
			
			}
			else
			{
				
				$superman->attack($batman);
				$batman->attack($superman);
				$superman->useHeatRay($batman);
				$batman->useBelt();
				$batman->useBatarangs();

					
			}
	}
}
while($batman->getHP() && $superman->getHP() >0 );


else{
	$superman->attack($batman);
	$batman->attack($superman);
	$superman->useHeatRay($batman);
	$batman->useBelt();
	$batman->useBatarangs();

}





echo "<pre>";
print_r($batman);
print_r($superman);
exit;
