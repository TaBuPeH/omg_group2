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
	
		<title>Heroes</title>
		
        <meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="../css/clouds.css" />
        <link rel="stylesheet" href="../css/main.css" />

        <script src="../js/jquery.min.js"></script>
        <script src="../js/clouds.js"></script>
        <script src="../js/app.js"></script>
		
    </head>
	
<<<<<<< HEAD
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
=======
    <body>
	
	<header>
		
		<div id="topLine" >

			<nav class="mainContainer">
				<a href="#">Profile</a>
				<a href="heroes.php">Create Hero</a>
				<a href="login.php">Login</a>
			</nav>
			
		</div>
		
	</header>
	
		<div class="content">
		
			<div id="background">
			
				<div id="far-clouds" class="stage clouds"></div>
				<div id="near-clouds" class="stage clouds"></div>
				<div id="ground" class="stage"></div>
				
			</div>
			
			
			<div class="battle mainContainer">
				
				<?php
				//echo  "WELCOME TO OUR WEBSITE, ".$_SESSION['logged_user']['username'];
				?>
				
				<div class="heroes"></div>
				<div class="heroes"></div>
				
			</div>
			
        </div>
		
    </body>
	
</html>

>>>>>>> 789a44c23ed01d1aeb219f63892af59f817ff6ca


