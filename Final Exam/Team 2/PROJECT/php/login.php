<html>
	<head>
		<link rel="stylesheet" href="../css/main.css" />
	</head>

	<body>
		
		<div id="loginForm">
		
		<!--
			<img src="../img/closeButton.png" id="closeButton"> 
		should be a button here -->
		
			<h2> Login Here </h2>
			
			<form method="post" action="login_db.php">
				
				<label>
				
					<span> Username: </span>
					<input type="text" name="username" >
					
				</label>
				
				<label>
				
					<span> Password: </span>
					<input type="password" name="password" >
					
				</label>
		
				
				<input class="button" id="logButton" type="submit" value="Login now!">
				
				<form action="register.php" >
			
					<input class="button" id="regButton" type="submit" value="Or REGISTER Here" name="Submit" />
					
				</form>
				
			</form>
			
			
			
		</div>
		
	</body>
	
</html>