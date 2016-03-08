<?php

class database
{
	private $config = array(
		'host' => 'localhost',
		'user' => 'root',
		'pass' => '',
		'database'=>'group1',
		'encoding'=> 'utf8'
	);
	
	private $dbHandle = null;
	
	function __construct($config=array())
	{
		if(!empty($config))
		{
			$this->config = $config;
		}
		
		
		$this->dbHandle = mysql_connect($this->config['host'],$this->config['user'],$this->config['pass']);
		mysql_select_db($this->config['database'],$this->dbHandle);
		
		mysql_query("SET NAMES '".$this->config['encoding']."'",$this->dbHandle);
		
	}
	
	
	function fetchArray($query)
	{
		
		$result = mysql_query($query);
		
		$info = array();
		while($row = mysql_fetch_assoc($result))
		{
			$info[] = $row;
		}
		
		return $info;
		
	}
	
	
	function saveArray($table,$info)
	{
		//$table = 'products';
		
		foreach($info as $key=>$row)
		{
			if(isset($row['id']) && $row['id']>0)
			{
				// update
				$this->updateRow($table, $row);
			}
			else
			{
				// insert
				$this->insertRow($table, $row);
			}
		}
	}
	
	function updateRow($table,$row)
	{
		$query = "UPDATE `".$table."` SET ";
		
		$conditions = array();
		foreach($row as $dbField=>$dbValue)
		{
			$conditions[] = " `".$table."`.`".$dbField."` = '".$dbValue."'";
		}
		
		$query .= implode(',',$conditions);
		
		$query .= " WHERE `".$table."`.`id` = '".$row['id']."'";
		
		mysql_query($query,$this->dbHandle);
		
	}
	
	function insertRow($table,$row)
	{
		
		// insert into products (field1,field2,field3) VALUES (info from our array $row)
		
		//insert into products (id,name,price) VALUES (0,'kote','22')
		//insert into products (name,price) VALUES ('kote5','223')
	}
	
	function deleteRow($table,$where)
	{
		
	}
}

$info[0]['id'] = 4;
$info[0]['name'] = 'kote';
$info[0]['price'] = 22;


$info[1]['id'] = 0;
$info[1]['name'] = 'kote';
$info[1]['price'] = 22;

$info[2]['name'] = 'kote5';
$info[2]['price'] = 223;


$db = new database();

$db->saveArray('products',$info);
