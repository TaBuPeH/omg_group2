<?php


session_start();

echo "<pre>";
print_r($_SESSION);

if(isset($_SESSION['user']))
{
	echo "Welcome ".$_SESSION['user']['username'];
	
}
else
{
	header("Location: index.php");		
}
