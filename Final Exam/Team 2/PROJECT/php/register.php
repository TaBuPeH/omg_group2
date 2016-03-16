<html>
	<head>
		<link href="main.css" rel='stylesheet'/>
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
#regButton{
	width:100%;
	
}
	</style>
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