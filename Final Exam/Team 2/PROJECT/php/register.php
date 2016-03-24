
<!--  vsichko e v login.php, tova ne go polzvam  -->
<!--  moje da trqbva da prenasochish neshto v bazata danni  -->



<html> 
	<head>
		<link rel="stylesheet" href="../css/main.css" />
	</head>
	
	<body>
		
		<h1> Register in our site for FREE!</h1>
		
		<form method="post" action="register_db.php">
			
			<label>
				<span>Username:</span>
				<input type="text" name="username" >
			</label>
			
			<label>
				<span>Password: </span>
				<input type="password" name="password" >
			</label>
			
			<label>
				<span>Repeat Password:</span>
				<input type="password" name="password_2" >
			</label>
			
			<label>
				<span>Email: </span>
				<input type="email" name="email" >
			</label>
			
			
			
			
			
			<input id="regButton" type="submit" value="REGISTER">
		</form>
		<form action="login.php">
				<input type="submit" value="Login" name="Submit" id="regButton" />
		</form>
	</body>
	
</html>