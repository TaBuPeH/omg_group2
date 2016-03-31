<?php session_start(); ?>
<!DOCTYPE html>
<html>
	
	<head>
		<script src="http://code.jquery.com/jquery-1.12.1.min.js"> </script>
		<script src="main.js"></script>
		<link href="main.css" rel="stylesheet"> 
	</head>
	
	<body>


	
                 <form method="post" action="teams.php">
					<select id='select' name="team1">
                        <option class='changeImg' value="1" data-href='img/1.png' href='ATT:81 MID:79 DEF:76' selected>Arsenal</option>
                        <option class='changeImg' value="2" data-href='img/3.png'  href='ATT:77 MID:77 DEF:79'>Liverpool</option>
                        <option class='changeImg' value="3" data-href='img/4.png'  href='ATT:81 MID:81 DEF:81'>Manchester City</option>
                        <option class='changeImg' value="4" data-href='img/2.png'  href='ATT:83 MID:82 DEF:81'>Chelsea</option>
                    </select>
                    <input type='submit' name='submit' value'Get team1'>
                  </form>
                  <form method="post" action="teams.php">
                     <select id='select1' name='team2'>
                        <option class='changeImg1' value="1" data-href='img/1.png' href='ATT:81 MID:79 DEF:76'>Arsenal</option>
                        <option class='changeImg1' value="2" data-href='img/3.png' href='ATT:77 MID:77 DEF:79' selected>Liverpool</option>
                        <option class='changeImg1' value="3" data-href='img/4.png' href='ATT:81 MID:81 DEF:81'>Manchester City</option>
                        <option class='changeImg1' value="4" data-href='img/2.png' href='ATT:83 MID:82 DEF:81'>Chelsea</option>
                    </select>  
                    <input type='submit' name='submit' value'Get team2'>
                    </form>
                    <br>
		<!-- <div class='team'>
			<span>team1</span>
			<div class='result1' id='chances1'>
				<span class='stat1'>0</span>
			</div>
		</div>
		<div class='team op'>
			<span>team2</span>
			<div class='result2' id='chances2'>
				<span class='stat2'>0</span>
			</div>
		</div>

		<br>
		<button type="button" id='Simulate' value='Play'>Play</button>
		<br>
		time<div id='timer'>0</div> -->


<?php
		require_once 'teams.php';
		?>

	</body>
	
</html>