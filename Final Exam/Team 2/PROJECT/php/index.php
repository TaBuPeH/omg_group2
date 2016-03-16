<?php 

require_once "db.class.php";


if(!isset($_SESSION['logged_user']))
{
	//header("Location: login.php");
}

?>

<!doctype html>
<html>

    <head>
	
        <meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Heroes</title>

        <link rel="stylesheet" href="../css/clouds.css" />

        <script src="../js/jquery.min.js"></script>
        <script src="../js/clouds.js"></script>
        <script src="../js/app.js"></script>
		
    </head>
	
    <body>
	
	<header>
		
		<div class="topLine">
		
		
			<div class="links">
			
				<nav>
					<a href="#">Profile</a>
					<a href="heroes.php">Create Hero</a>
					<a href="login.php">Login</a>
				</nav>
				
			</div>
			
		</div>
	
        <div id="far-clouds" class="stage clouds"></div>
        <div id="near-clouds" class="stage clouds"></div>
		<div id="ground" class="stage"></div>
		

        <div class="battle">
			
			<?php
			//echo  "WELCOME TO OUR WEBSITE, ".$_SESSION['logged_user']['username'];
			?>
			
			<div class="hero"></div>
			<div class="hero"></div>
			
        </div>
		
    </body>
	
</html>



