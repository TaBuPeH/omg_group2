<html>
	<head>

		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
		<style>
	
h1
{
	display: block;
	width: 30%;
	float: left;
	margin-left: 35%;
	text-align: center;
}
form
{
	display: block;
	width: 30%;
	float: left;
	margin-left: 35%;
}
label
{
	display: block;
	width: 100%;
	float: left;
	margin: 10px 0px;
}
label input,
label select
{
	display: block;
	width: 70%;
	float: left;
	border-radius: 2px;
	font-size: 18px;
	border: 1px solid #0000FF;
}
label span
{
	display: block;
	width: 30%;
	float: left;
}
#logButton{
	width:100%;
	
}
	</style>
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
				<input type="submit" value="Or REGISTER Here" name="Submit" id="logButton" />
</form>
	</body>
	
</html>