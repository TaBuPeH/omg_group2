<?php

	require_once "db.class.php";
	
	echo "<pre>";
	print_r($_POST);


	$data = $_POST;
	
	foreach($data as $k=>$v)
	{
		$data[$k] = trim($data[$k]);
	}
	
	$hasError = 0;
	
	
	$query = "SELECT * FROM `users` WHERE `username` = '".$data['username_sign']."' ";
	
	$result = $db->fetchArray($query);
	
	if(!empty($result))
	{
		$hasError = 1;	
	}	
	if(strlen($data['username_sign']) < 4)
	{
		$hasError = 1;
	}
	
	if(strlen($data['password_sign']) < 4)
	{
		$hasError = 1;
	}
	
	if($data['password_sign'] != $data['password_2'])
	{
		$hasError = 1;
	}

	if($hasError == 0)
	{
		unset($data['password_2']);
		$data['password_sign'] = md5($data['password_sign']);
		$db->saveArray('users', $data);
	}
	else
	{
		echo "we have an error";
	}
?>