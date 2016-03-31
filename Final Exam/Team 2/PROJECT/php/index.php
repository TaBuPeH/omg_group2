<?php 
	require_once "db.class.php";
	require_once "login.php";
	require_once "register.php";


require_once "db.class.php";


if(!isset($_SESSION['logged_user']))
{
	header("Location: login.php");
}


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
        <script src="../js/login.js"></script>
        <script src="../js/main.js"></script>
		
	<!-- 	<script src="http://code.jquery.com/jquery-1.10.2.js"></script> -->
		
    </head>
<<<<<<< HEAD
	

</style>
</head>
<body>
<?php
echo  "WELCOME TO OUR WEBSITE, ".$_SESSION['logged_user']['username'];
?>
<br>
<a href="logout.php">Logout</a>
<a href="heroes.php">Create Hero</a>
=======

>>>>>>> 35e350e9e11ed68cba31714339e23273cc3d67f0
    <body>
	
		<header>
			
			<div id="topLine" >

				<nav>
					<input type="submit" class="topButtons" id="profButton" value="Profile">
					<input type="submit" class="topButtons" id="heroButton" value="Create Hero">
					<input type="submit" class="topButtons" id="logButton" value="Login"> <!--  -->
					<!-- should change to "Logout" on logging -->
				</nav>
				
			</div>
			
		</header>
	
		<div class="content">
		
			<div id="background">
			
				<div id="far-clouds" class="stage clouds"></div>
				<div id="near-clouds" class="stage clouds"></div>
				<div id="ground" class="stage"></div>
				
			</div>
			
			
			<?php
			//echo  "WELCOME TO OUR WEBSITE, ".$_SESSION['logged_user']['username'];
			?>
			
			<div id="heroes">
			
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

<<<<<<< HEAD


=======
>>>>>>> 35e350e9e11ed68cba31714339e23273cc3d67f0

