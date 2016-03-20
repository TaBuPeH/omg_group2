<?php 
	require_once "db.class.php";
	require_once "login.php";

	if(!isset($_SESSION['logged_user']))
	{
		//header("Location: login.php");
	}
?>

<!doctype html>
<html>

    <head>
	
		<title>Heroes</title>
		
        <meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="stylesheet" href="../css/main.css" />
		<link rel="stylesheet" href="../css/background.css" />
        <link rel="stylesheet" href="../css/heroes.css" />
        <link rel="stylesheet" href="../css/login.css" />

        <script src="../js/jquery.min.js"></script>
        <script src="../js/clouds.js"></script>
        <script src="../js/app.js"></script>
        <script src="../js/atack.js"></script>
		
    </head>

    <body>
	
		<header>
			
			<div id="topLine" >

				<nav>
					<a href="#">Profile</a>
					<a href="heroes.php">Create Hero</a>
					<a href="login.php">Login</a> <!-- should change to logout on logging -->
				</nav>
				
			</div>
			
		</header>
	
		<div class="content">
		
			<div id="background">
			
				<div id="far-clouds" class="stage clouds"></div>
				<div id="near-clouds" class="stage clouds"></div>
				<div id="ground" class="stage"></div>
				
			</div>
			
			
			<div id="battle">
				
				<?php
				//echo  "WELCOME TO OUR WEBSITE, ".$_SESSION['logged_user']['username'];
				?>
				
				<div class="heroes" id="faster">
				
					<img src="../img/hero1.png">
					
				</div>
				<div class="heroes">
					
					<img src="../img/hero1.png">
					
				</div>
				
			</div>
			
        </div>
		
    </body>
	
</html>


