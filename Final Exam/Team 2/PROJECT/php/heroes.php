<html>
	<head>
		<link rel="stylesheet" href="../css/main.css" />
	</head>
	
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