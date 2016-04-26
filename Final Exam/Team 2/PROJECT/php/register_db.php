<?php

	require_once "db.class.php";
	
	//echo "<pre>";
	//print_r($_POST);


	$data = $_POST;
	
	foreach($data as $k=>$v)
	{
		$data[$k] = trim($data[$k]);
	}
	
	$hasError = 0;
	
	
	$query = "SELECT * FROM `users` WHERE `username` = '".$data['username']."' ";
	
	$result = $db->fetchArray($query);
	
	if(!empty($result))
	{
		$hasError = 1;	
	}	
	if(strlen($data['username']) < 4)
	{
		$hasError = 1;
	}
	
	if(strlen($data['password']) < 4)
	{
		$hasError = 1;
	}
	
	if($data['password'] != $data['password_2'])
	{
		$hasError = 1;
		echo "Passwords don't match!";
	}

	if($hasError == 0)
	{
		unset($data['password_2']);
		$data['password'] = md5($data['password']);
		$db->saveArray('users', $data);
		//header('Location: login.php');
	}
	else
	{
		//header('Location: register.php');
	}
?>