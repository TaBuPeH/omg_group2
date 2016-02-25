<?php

require_once "vehicle.class.php";

class Plane extends Vehicle
{
    public $seats;
    public $distance;
    public $company;
    public $chance;
    public function __construct($a, $b, $s,$d,$c,$chance)
    {
        
        $this->seats = $s;
        $this->distance = $d;
        $this->company = $c;
        $this->chance =$chance;
        

        parent::__construct($a, $b);
    }

    public function attack($chance){
        if($chance>50)
        {
            echo "BOOM!!!";
        }
    }

}
?>