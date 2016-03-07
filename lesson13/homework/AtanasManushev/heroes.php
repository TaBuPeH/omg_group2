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
	
	public function __construct($a, $b)
	{
		$this->hp = $a;
		$this->dmg = $b;
	}
}


class human extends lifeform
{
	protected $utilityDamage;
	protected $RagePower;
	
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
	
	public function setRagePower($p)
	{
		$this->ragePower = $p;
	}
	
	public function getRagePower()
	{
		return $this->ragePower;
	}
	
	public function useRagePower()
	{
		$this->dmg = $this->dmg*$this->ragePower;
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


$achilleas = new human(100,10);
$achilleas->setUtilityDamage(1.2);
$achilleas->setCritChance(10);
$achilleas->setRagePower(2);

$superman = new kryptonian(100,10); 
$superman->setHeatRay(18);
$superman->setCritChance(20);
$br = 0;
 
while ($achilleas->getHP() && $superman->getHP() > 0)
{
	
	$br++;
	
	if($br % 2 == 0)
	{
		if(rand(0,1) < 1)
		{
			$achilleas->useRagePower();
			$achilleas->attack($superman);
			if($superman->getHP() > 0)
			{
				$superman->useHeatRay($achilleas);
				$superman->attack($achilleas);
			}
		}
		else
		{
			$superman->useHeatRay($achilleas);
			$superman->attack($achilleas);
			if($achilleas->getHP() > 0)
			{	
				$achilleas->useRagePower();
				$achilleas->attack($superman);
			}
		}
		
	}	
	else
	{	
		
		if(rand(0,1) < 1)
		{
			$achilleas->attack($superman);
			if($superman->getHP() > 0)
			{	
				$superman->attack($achilleas);
			}
		}
		else
		{
			$superman->attack($achilleas);
			if($achilleas->getHP() > 0)
			{
				$achilleas->attack($superman);
			}
		}
	
	}
	
	echo "<pre>";
	print_r($achilleas);
	print_r($superman);
	
}


if($achilleas->getHP()<0)
{
	echo "Superman wins";
}
else{
	echo "Achilleas wins";
}

exit;



/*$achilleas->attack($superman);
$superman->attack($achilleas);

$achilleas->useRagePower();
$achilleas->attack($superman);

$superman->useHeatRay($achilleas);
*/
