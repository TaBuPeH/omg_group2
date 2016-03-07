<?php


class lifeform
{
	protected $hp;
	protected $dmg;
	
	protected $critChance;
	
	public function attack(&$target)
	{
		
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


class human extends lifeform
{
	protected $utilityDamage;
	
	public function setUtilityDamage($s)
	{
		$this->utilityDamage = $s;
	}
	
	public function getUtilityDamage()
	{
		return $this->utilityDamage;
	}
	
	public function useBelt()
	{
		$this->dmg = $this->dmg*$this->utilityDamage;
	}
}

class kryptonian extends lifeform
{
	protected $heatRay;
	protected $superhumanBreath;

	public function setSuperhumanBreath($h)
	{
		$this->superhumanBreath = $h;
	}
	
	public function getSuperhumanBreath()
	{
		return $this->superhumanBreath;
	}
	
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
		$target->setHP($remaining);		
	}

	public function useSuperhumanBreath(&$target)
	{
		$remaining = $target->getHP() - $this->superhumanBreath ;
		$target->setHP($remaining);		
	}
}


$batman = new human(100,10);
$batman->setUtilityDamage(1.2);
$batman->setCritChance(10);

$superman = new kryptonian(100,10); 
$superman->setHeatRay(18);
$superman->setSuperhumanBreath(25);
$superman->setCritChance(20);

do{
if($batman->speed < $superman->speed)
{
	$superman->attack($batman);
	$batman->attack($superman);
	$superman->useHeatRay($batman);
	$superman->useSuperhumanBreath($batman);
	$batman->useBelt();
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
				$superman->useSuperhumanBreath($batman);
				$superman->useHeatRay($batman);
			
			}
			else
			{
				
				$superman->attack($batman);
				$batman->attack($superman);
				$superman->useHeatRay($batman);
				$batman->useBelt();
				$superman->useSuperhumanBreath($batman);

					
			}
	}
}
while($batman->getHP() && $superman->getHP() >0 );


if(1){

	$batman->attack($superman);
	$superman->attack($batman);
	$batman->useBelt();
	$superman->useSuperhumanBreath($batman);
	$superman->useHeatRay($batman);

}




echo "<pre>";
print_r($batman);
print_r($superman);
exit;
?>