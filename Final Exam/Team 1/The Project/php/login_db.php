<?php

require_once "db.class.php";

$data = $_POST;

echo "<pre>";

$data['username'] = mysqli_real_escape_string($db->dbHandle, $data['username']);

$query = "SELECT * FROM `users` WHERE `username` = '".$data['username']."' ";

$result = $db->fetchArray($query);

if(!empty($result))
{
	if($result[0]['password'] == md5($data['password']))
	{
		// 
		$_SESSION['logged_user'] = $result[0];
		header('Location: indexa.php');
	}
	else
	{
		echo "NOOOO";	
	}
}

