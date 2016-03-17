<?php 


require_once "db.class.php";




if(!isset($_SESSION['logged_user']))
{
	header("Location: login.php");
}

?>
<html>

<head>
<style>
body {
    background-color: white;
}

h1 {
    color: maroon;
    text-align:center;
	
} 
</style>
</head>
<body>
<?php
echo  "WELCOME TO OUR WEBSITE, ".$_SESSION['logged_user']['username'];
?>
<br>
<a href="logout.php">Logout</a>
<a href="heroes.php">Create Hero</a>

</body>

</html>