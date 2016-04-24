<?php 
	require_once "db.class.php";
	require_once "login.php";
	require_once "register.php";


require_once "db.class.php";


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

        <script src="../js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
    	<script src="../js/jquery.min.js"></script>
        <script src="../js/clouds.js"></script>
        <script src="../js/app.js"></script>
        <script src="../js/atack.js"></script>
        <script src="../js/login.js"></script>
        <script src="../js/main.js"></script>
		<!--   -->
	 	 
    </head>	

<body>
	<?php
	//echo  "WELCOME TO OUR WEBSITE, ".$_SESSION['logged_user']['username'];
	?>
    <body>
	
		<header>
			
			<div id="topLine" >

				<nav>
					<!--  <input type="submit" class="topButtons" id="profButton" value="Profile">  -->
					<input type="submit" class="topButtons" id="logButton" value="Login"> 
					<input type="submit" class="topButtons" id="heroButton" value="New Game">
					<!--  -->
					<!-- should change to "Logout" on logging -->
				</nav>
				
			</div>
			
		</header>
	
	
		<div id="background">		
			<div id="far-clouds" class="stage clouds"></div>
			<div id="near-clouds" class="stage clouds"></div>
			<div id="ground" class="stage"></div>
		</div>
			
		<div id="content">
		
			<?php
			//echo  "WELCOME TO OUR WEBSITE, ".$_SESSION['logged_user']['username'];
			?>

			<!--  	-->
			<div>
				<div class="health">  
					<div> <span>Health:</span> 100/100 </div>
				</div>
				
				<div class="health">  
					<div> <span>Health:</span> 100/100 </div>
				</div>
			</div>
			
			<div>
			
				<div class="actions">
					<div>
						<img src='../img/attack.png' class='action attack'>
						<img src='../img/rest.png' class='action rest'>
						<img src='../img/specialAbility.png' class='action specialAbility'> 
						<!-- <img src='../img/defence.png'>  	-->
					</div>
				</div>
				
				<div class="actions">
					<div>
						<img src='../img/attack.png' class='action attack'>
						<img src='../img/rest.png' class='action rest'>
						<img src='../img/specialAbility.png' class='action specialAbility'> 
						<!-- <img src='../img/defence.png'>  	-->
					</div>
				</div>
				
			</div>
			
			<div>
			
				<div class="hero">
					<img src="../img/hero1.png">
				</div>
				
				<div class="hero">
					<img src="../img/hero1.png">
				</div>
				
			</div>
			
        </div>
		
    </body>
	
</html>
