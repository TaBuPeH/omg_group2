<html>
	<head>
		<link rel="stylesheet" href="../css/main.css" />
	</head>

	<body>
		
		<h1> Login Here</h1>
		
		<form method="post" action="login_db.php">
			
			<label>
				<span>Username:</span>
				<input type="text" name="username" >
			</label>
			
			<label>
				<span>Password: </span>
				<input type="password" name="password" >
			</label>
	
			
			<input id="logButton" type="submit" value="Login now!">
			
		</form>
		<form action="register.php" >
				<input id="logButton" type="submit" value="Or REGISTER Here" name="Submit" />
</form>
	</body>
	
</html>