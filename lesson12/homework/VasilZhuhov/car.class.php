<?php

require_once "vehicle.class.php";

class Car extends Vehicle
{
	public $seats;
	
	public function __construct($a, $b, $s)
	{
		$this->seats = $s;
		parent::__construct($a, $b);
	}
    public function load($passengers)
    {
        if($this->seats>$passengers)
        {
        $this->seats= $this->seats-$passengers;
        }
        else{

          echo "nqma mqsto za ".$passengers." putnika";
        }

    }
    public function unload($passengers)
    {
        while ( $this->seats<=5) {
            $this->seats= $this->seats+$passengers;
        }
         
    }
    /* public function unload($passengers)
    {
            $this->seats= $this->seats+$passengers;
         
    }*/
}
?>