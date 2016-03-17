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
		
		<h1> Create your HERO</h1>
		
		<form method="post" action="heroes_db.php">
			
			<label>
				<span>Name:</span>
				<input type="text" name="name" >
			</label>
			
			<label>
				<span>STR: </span>
				<input type="text" name="STR" >
			</label>
			
			<label>
				<span>DEX:</span>
				<input type="text" name="DEX" >
			</label>
			
			<label>
				<span>VIT: </span>
				<input type="text" name="VIT" >
			</label>
			<label>
				<span>INT: </span>
				<input type="text" name="INT_" >
			</label>
			
				<input id="regButton" type="submit" value="Create HERO">
		</form>
	</body>
	
</html>