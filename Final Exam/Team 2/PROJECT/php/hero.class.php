<?php


 class lifeform
{
	 protected $hp;
	 protected $dmg;
	 //protected $critChance;
	
	 public function attack(&$target)
	 {
		 $critModifier = 1;
		
		 // if( rand(0,100) < $this->critChance)
		 // {
			// // $critModifier = 2;
		 // }
		 // if( rand(0,1000) == 666)
		 // {
			// // $critModifier = 10;
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


  class warrior extends lifeform
  {
	  protected $powerHit;
	
	  public function setPowerHit($s)
	  {
		  $this->powerHit = $s;
	  }
	
	  public function getPowerHit()
	  {
		  return $this->powerHit;
	  }
	
	  public function usePowerHit()
	  {
		  $this->dmg = $this->dmg*$this->powerHit;
	  }
  }
 class healer extends lifeform
  {
	  protected $restoreHp;
	
	  public function setRestoreHp($s)
	  {
		  $this->restoreHp = $s;
	  }
	
	  public function getRestoreHp()
	  {
		  return $this->restoreHp;
	  }
	
	  public function useRestoreHp()
	  {
		  $this->hp = $this->hp + $this->restoreHp;
	  }
  }
  class tanker extends lifeform
  {
	  protected $buildArmor;
	
	  public function setBuildArmor($s)
	  {
		  $this->buildArmor = $s;
	  }
	
	  public function getBuildArmor()
	  {
		  return $this->buildArmor;
	  }
	
	  public function useBuildArmor(&$target)
	  {
		  $target->dmg = $target->dmg * 0.9 ;
		 
	  }
  }

  ?>