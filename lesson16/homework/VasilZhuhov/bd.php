<?php
//SELECT * FROM `shop_products` INNER JOIN `products` ON `shop_products`.`products_id`=`products`.`id` INNER JOIN `shops` ON `shop_products`.`shops_id`=`shops`.`id`
class database
{
    private $config = array(
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'database'=>'shops',
        'encoding'=> 'utf8'
    );
    
    private $dbHandle = null;
    
    function __construct($config=array())
    {
        if(!empty($config))
        {
            $this->config = $config;
        }
        
        
        $this->dbHandle = mysqli_connect($this->config['host'],$this->config['user'],$this->config['pass']);
        mysqli_select_db($this->dbHandle,$this->config['database']);
        
        mysqli_query($this->dbHandle,"SET NAMES '".$this->config['encoding']."'");
        
    }
    
    
    function fetchArray($query)
    {
        
        $result = mysqli_query($this->dbHandle,$query);

        $info = array();
        while($row = mysqli_fetch_assoc($result))
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
        
        mysqli_query($this->dbHandle,$query);
        
    }
    
    function insertRow($table,$row)
    {
        
        // insert into products (field1,field2,field3) VALUES (info from our array $row)
        
        //insert into products (id,name,price) VALUES (0,'kote','22')
        //insert into products (name,price) VALUES ('kote5','223')
    }
    
       function deleteRow($table, $where, $id)
        {
            $query = "DELETE FROM `".$table."` WHERE `".$id."` = '".$where."'";
            mysqli_query($this->dbHandle, $query);
        }
            
}
$bd=new database();
$q="SELECT * FROM `shop_products`  INNER JOIN `products` ON `shop_products`.`products_id`=`products`.`id` INNER JOIN `shops` ON `shop_products`.`shops_id`=`shops`.`id`";

$s=$bd->fetchArray($q);
echo "<pre>";
print_r($s);
/*
$shops = new database();

$shops->saveArray('products',$info);
*/