<?php  

/*
 * 
 * 
 * 
 * 
 * 
SELECT matches.id, matches.team_1_id, matches.team_2_id, team1.name as team1_name, team2.name as team2_name, minutes.minute, actions.name as action_name, teams.name as action_team_name FROM `matches`  
inner join teams as team1 on matches.team_1_id = team1.id
inner join teams as team2 on matches.team_2_id = team2.id
inner join `minutes` on minutes.match_id = matches.id
inner join actions on minutes.action_id = actions.id
left join `teams` on minutes.team_id = teams.id
 * 
 * 
 * 
 * 
 * 
 * /
 * 
 * 
require_once('db.class.php');

$query = 'select * from teams';

$teams = $db->fetchArray($query);


$query = 'select * from teams where id='.$_POST['team_1_id'];

$team1 = $db->fetchArray($query);

$query = 'select * from teams where id='.$_POST['team_2_id'];

$team2 = $db->fetchArray($query);


//$team1 = array(0 => array('id'=>'','Name','att','def','mid'));
//$team2 = array(0 => array('id'=>'','Name','att','def','mid'));
/*
if($team1[0]['MID'] > $team2[0]['mid'] )
{
	
}*/
?>
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
                     
                     <?php 
                     
                     
                     foreach($teams as $key=>$team)
					 {
					 	if($key == 0)
						{
							$isSelected = " selected ";
						}	
						else
						{
							$isSelected = '';
						}
					 ?>
                     
                        <option class='changeImg' value="<?php echo $team['id']?>" data-href='img/<?php echo $team['id']?>.png' data-att='<?php echo $team['ATT']?>' data-mid='<?php echo $team['MID']?>' data-def='<?php echo $team['DEF']?>' <?php echo $isSelected?> > <?php echo $team['Name']?></option>
                    
					 <?php
					 
					 }
					 
					 ?>
                    
                   
                    </select>
                   
                   	<script>
                   		
                   		alert($("#select option:selected").attr('data-att'));
                   		alert($("#select option:selected").attr('data-def'));
                   		
                   		
                   	</script>
                    <input type='submit' name='submit' value'Get team1'>
                  </form>
                  <form method="post" action="teams.php">
                     <select id='select1' name='team2'>
                      <?php 
                     
                     
                     foreach($teams as $key=>$team)
					 {
					 	if($key == 0)
						{
							$isSelected = " selected ";
						}	
						else
						{
							$isSelected = '';
						}
					 ?>
                     
                        <option class='changeImg1' value="<?php echo $team['id']?>" data-href='img/<?php echo $team['id']?>.png' data-att='<?php echo $team['ATT']?>' data-mid='<?php echo $team['MID']?>' data-def='<?php echo $team['DEF']?>' <?php echo $isSelected?> > <?php echo $team['Name']?></option>
                    
					 <?php
					 
					 }
					 
					 ?>
                       
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