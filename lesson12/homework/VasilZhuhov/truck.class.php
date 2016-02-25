<?php

require_once "vehicle.class.php";

class Truck extends Vehicle
{
	public $load;
    public $unload;
	public function __construct($a, $b, $bb)
	{
		$this->boxes = $bb;
		parent::__construct($a, $b);
	}
    public function load($box){
        $this->boxes= $this->boxes+$box;
        $this->load=$this->load+$box;
    }
    public function unload($box){
        $this->boxes= $this->boxes-$box;
        $this->unload=$this->unload+$box;
    }
}
?>