<html>

	<head>
        <script src="../js/main.js"></script>
    </head>

	<body>
		
		<div class="forms">
	
			<!-- -->
			<img src="../img/closeButton.png" id="closeButton"> 
			
		
			<h2> </h2>
			
			<form id="loginForm" method="post" action="login_db.php">
				
				<label>
				
					<span> Username: </span>
					<input type="text" name="username" >
					
				</label>
				
				<label>
				
					<span> Password: </span>
					<input type="password" name="password" >
					
				</label>
		
		
				<input class="button" id="loggingButton" type="button" value="Login now!">
				
				<form action="register.php" >
			
					<input class="button" id="registratingButton" type="button" value="Or REGISTER Here" name="Submit" />
					
				</form>
				
			</form>
			
			<form id="registerForm" method="post" action="login_db.php">
				
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
					<span>Repeat it:</span>
					<input type="password" name="password_2" >
				</label>
				
				<label>
					<span>Email: </span>
					<input type="email" name="email" >
				</label>
					
		
				
				<input class="button" id="loggingButton" type="button" value="Back to login">
				
				<form action="register.php" >
			
					<input class="button" onClick="onClick()" id="registratingButton" type="button" value="REGISTER" name="Submit" />
					
				</form>
				
			</form>
		
		
		</div>
		
	</body>
	
</html>