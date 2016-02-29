<?php

require_once("lifeform.class.php");

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
		$remaining = $target->getHP() - $this->heatRay;
		// $superman->setHP(90);
		$target->setHP($remaining);		
	}
}

?>