
<html> 
	<head>
		<script src="../js/main.js"></script>
	</head>
	
	<body>
		
		<div id="lf">
	
			<!-- -->
			<img src="../img/closeButton.png" id="closeButton"> 
			
			<h2> </h2>
			
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
		
				
				<input class="button loginButton" type="button" value="Back to login">
				
				<form action="register.php" >
			
					<input class="button registrationButton" onClick="onClick()" type="button" value="REGISTER" name="Submit" />
					
				</form>
			
		</div>
		
	</body>
	
</html>