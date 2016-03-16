<?php

	require_once "db.class.php";
	
		echo "<pre>";
		print_r($_POST);

		
		
		
		
		
		$HeroData = $_POST;
		
		
		
		foreach($HeroData as $k=>$v)
		{
			$HeroData[$k] = trim($HeroData[$k]);
		}
		
		
		
		$db->saveArray('heroes', $HeroData);
		//header('Location: login.php');
?>