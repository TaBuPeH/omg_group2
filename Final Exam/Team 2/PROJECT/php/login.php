<html>

	<head>
        <script src="../js/main.js"></script>
    </head>

	<body>
		
		<div id="lf">
	
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
		
		
				<input class="button loginButton" type="button" value="Login now!">
				
				<form action="register.php" >
			
					<input class="button registrationButton" type="button" value="Or REGISTER Here" name="Submit" />
					
				</form>
				
			</form>
		
		
		</div>
		
	</body>
	
</html>