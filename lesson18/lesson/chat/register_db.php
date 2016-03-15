<?php

require_once('db.class.php');
echo "<pre>";

$user = $_POST;

$hasError = 0;

foreach($user as $k=>$v)
{
	$user[$k] = trim($user[$k]);
	$user[$k] = htmlentities(mysqli_real_escape_string($db->dbHandle, $user[$k]));
}

if(strlen($user['username'])< 4)
{
	$hasError = 1;
}

$query = "SELECT * FROM `users` WHERE `users`.`username` = '".$user['username']."'";
$result = $db->fetchArray($query);
 
if(count($result) > 0)
{
	$hasError = 1;
}

if(strlen($user['password'])< 4)
{
	$hasError = 1;
}

if($user['password'] != $user['password_2'])
{
	$hasError = 1;
}

if(!preg_match("/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD",$user['email']))
{
		$hasError = 1;
}
if(!$hasError)
{
	// md5 / sha1
	$user['password'] = md5($user['password']);	
	unset($user['password_2']);
	$db->saveArray("users", $user);
	
	header('Location: login.php');
}
else
{
	echo "There is an error with your data";
	
}
