<html>

	<head>
        <script src="../js/main.js"></script>
    </head>

	<body>
		
		<div id="loginForm">
		
		<!-- 
			<img src="../img/closeButton.png" id="closeButton"> 
		-->
		
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
		
				
				<input class="button" id="loggingButton" type="submit" value="Login now!">
				
				<form action="register.php" >
			
					<input class="button" id="registratingButton" type="submit" value="Or REGISTER Here" name="Submit" />
					
				</form>
				
			</form>
			
			
			
		</div>
		
	</body>
	
</html>