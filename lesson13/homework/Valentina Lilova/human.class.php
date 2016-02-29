<?php

require_once("lifeform.class.php");

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

?>