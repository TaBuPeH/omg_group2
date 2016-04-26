<?php


 class lifeform
{
	 protected $hp;
	 protected $dmg;
	 //protected $critChance;
	
	 public function attack(&$target)
	 {
		
		
		 // if( rand(0,100) < $this->critChance)
		 // {
			// // $critModifier = 2;
		 // }
		 // if( rand(0,1000) == 666)
		 // {
			// // $critModifier = 10;
		 // }
		 
		 $dmg_dealth=rand(2,5);
		 $remaining = $target->getHP() - $dmg_dealth -$this->dmg;
		 $target->setHP($remaining);		
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
	 
	 public function rest()
	 {
		 $this->hp+=5;
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
	
	  public function usePowerHit(&$target)
	  {
		  $dmg_dealth=rand(2,20);
		 $remaining = $target->getHP() - $dmg_dealth;
		  
		$target->setHP($remaining);	
		  
	  }
  }
 class healer extends lifeform
  {
	  protected $restoreHp;
	
	  // public function setRestoreHp($s)
	  // {
		  // $this->restoreHp = $s;
	  // }
	
	  // public function getRestoreHp()
	  // {
		  // return $this->restoreHp;
	  // }
	
	  public function RestoreHp()
	  {
		  $health_restored=rand(5,15);
		  $this->hp +=$health_restored;
	  }
  }
  // class tanker extends lifeform
  // {
	  // protected $buildArmor;
	
	  // public function setBuildArmor($s)
	  // {
		  // $this->buildArmor = $s;
	  // }
	
	  // public function getBuildArmor()
	  // {
		  // return $this->buildArmor;
	  // }
	
	  // public function useBuildArmor(&$target)
	  // {
		  // $target->dmg = $target->dmg * 0.9 ;
		 
	  // }
  // }

  ?>