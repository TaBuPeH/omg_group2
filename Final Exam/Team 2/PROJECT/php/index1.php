<?php 
	require_once "db.class.php";
	//require_once "play.php";
	require_once "game.php";
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
	
		<header>
			<div id="topLine" >
				<nav>
					<!--  <input type="submit" class="topButtons" id="profButton" value="Profile">  -->
					<input type="submit" class="topButtons" id="logoutButton" value="Logout"> 
					<input type="submit" class="topButtons" id="heroButton" value="New Game">
					<div id="welcome">
					<?php
						//echo  "WELCOME TO OUR WEBSITE, ".$_SESSION['logged_user']['username'];
					?>
				</nav>
			</div>
		</header
	
		<div id="background">		
			<div id="far-clouds" class="stage clouds"></div>
			<div id="near-clouds" class="stage clouds"></div>
			<div id="ground" class="stage"></div>
		</div>
			
		<div id="content">
		
			<div id="currentTurn" class="currentTurn"></div>
			<div id="divLeftHero" class="divLeftHero"></div>
			<div id="divRightHero" class="divRightHero"></div>
			
			<!--  	-->
			<div>
				<div class="health">
					<div id="hero1"> <span>Health:</span> 130/130 </div>
				</div>
				<div class="health">  
					<div id="hero2"> <span>Health:</span> 150/150 </div>
				</div>
			</div>
			
			<div>
				<div class="actions">
					<div class='hero_0_actions' id="hero_0_actions">
						<img src='../img/attack.png' class='action attack'>
						<img src='../img/rest.png' class='action rest'>
						<img src='../img/specialAbility.png' class='action specialAbility'> 
						<!-- <img src='../img/defence.png'>  	-->
					</div>
				</div>
				<div class="actions">
					<div  class='hero_1_actions' name="hero_1_actions">
						<img src='../img/attack.png' class='action attack'> 
						<img src='../img/rest.png' class='action rest'>
						<img src='../img/specialAbility.png' class='action specialAbility'> 
						<!-- <img src='../img/defence.png'>  	-->
					</div>
				</div>
			</div>

			<div>
				<div class="nekuvDiv"> 
					<div> 
						<span>Attack:</span></br> 10-13 d<span>amage</span>
					</div> 
					<div> 
						<span>Rest:</span></br> 5 h<span>ealth</span>
					</div>
					<div> 
						<span>Power Hit:</span></br> 2-20 d<span>amage</span>
					</div>
				</div>
				<div class="nekuvDiv">  
					<div> 
						<span>Attack:</span></br> 7-10 d<span>amage</span> 
					</div>
					<div> 
						<span>Rest:</span></br> 5 h<span>ealth</span>
					</div>
					<div> 
						<span>God's Touch:</span></br> 5-15 h<span>ealth</span>
					</div>
				</div>
			</div>

			<div>
				<div class="hero">
					<img src="../img/hero3.png">
				</div>
				<div class="hero">
					<img src="../img/hero2.png">
				</div>
			</div>
        </div>
    </body>
</html>
