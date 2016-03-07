<?php




class format
{
	public static $lastAmountOfMoney=0;
	
	public static function applyDDS($money)
	{
		self::$lastAmountOfMoney = $money;
		return $money*1.2;
	}
}


$a = format::applyDDS(100);

echo format::$lastAmountOfMoney;

echo $a;
exit;





interface wheel
{
	function rotate();
}

interface tire
{
	function pump();
}


interface horsePower
{
	function drag();
}

class carTyre implements wheel,tire
{
	
	function rotate()
	{
		
	}
	
	function pump()
	{
		
	}
}


class karucaTyre implements wheel, horsePower
{
	
	function rotate()
	{
		
	}
	
	function drag()
	{
		
	}
}






abstract class machine
{
	abstract function move();
	
	
	function rotate()
	{
		
	}
}

class automobile extends machine
{
	protected $km=0;
	
	function move()
	{
		$this->km+=1;
	}
}




class klimatik extends machine
{
	protected $isOpen = false;
	
	function move()
	{
		$this->isOpen = true;
	}
}


$a = new automobile;
$k = new klimatik;


