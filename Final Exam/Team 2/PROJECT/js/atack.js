	
document.addEventListener("DOMContentLoaded", function(event) { 
	var attackerHP;
	var defenderHP;
	var options = {
		duration: 1000,
		easing: 'swing' 
	};

	$(".attack").click(function()
	{	
		
		$(this).fadeOut(1000).delay(800).fadeIn(1000);
	
		$(".hero:nth-of-type(1) img").animate({left: '+=80%', opacity: '0.5'}, options);
		$(".hero:nth-of-type(2) img").animate({left: '-=80%', opacity: '0.5'}, options);
		
		
		if($(this).closest('.hero_0_actions').length)
		{
			
			var url_warr= "warrior_attack.php?warrior=0&healer=1";
			
			//document.getElementById("hero1").innerHTML = response+"/";
		}	
		else
		{
			var url_heal= "healer_attack.php?attacker=0&defender=1";
			//var url_warr= "defender.php?attacker=1&defender=0";
			//var url_heal= "defender.php?attacker=0&defender=1";
			//document.getElementById("hero2").innerHTML = response;
			
		}
		//$.get(url,function(response){
			
			//console.log(response);
			
			 
			 //document.getElementById("hero1").innerHTML = response;
		//);
		 $.get(url_warr,function(response_warr){
			
			console.log(response_warr);
			 
			 document.getElementById("hero2").innerHTML = response_warr;
		});
		$.get(url_heal,function(response_heal){
			
			console.log(response_heal);
			 
			 document.getElementById("hero1").innerHTML = response_heal;
		});

			
		$(".hero:nth-of-type(1) img").animate({left: '-=80%', opacity: '1'}, options);
		$(".hero:nth-of-type(2) img").animate({left: '+=80%', opacity: '1'}, options);
	});
	$(".actions:nth-of-type(1) .rest").click(function()
	{
		$(this).fadeOut(1000).delay(2300).fadeIn(1000);
		
		$(".hero:nth-of-type(1) img").fadeOut(600).delay(10).fadeIn(600);
		$(".hero:nth-of-type(1) img").fadeOut(600).delay(10).fadeIn(600);
		$(".hero:nth-of-type(1) img").fadeOut(600).delay(10).fadeIn(600);
		
	});
	$(".actions:nth-of-type(2) .rest").click(function()
	{
		$(this).fadeOut(1000).delay(2300).fadeIn(1000);
		
		$(".hero:nth-of-type(2) img").fadeOut(600).delay(10).fadeIn(600);
		$(".hero:nth-of-type(2) img").fadeOut(600).delay(10).fadeIn(600);
		$(".hero:nth-of-type(2) img").fadeOut(600).delay(10).fadeIn(600);
		
	});
	$(".specialAbility").click(function()
	{
		$(this).fadeOut(1000).delay(800).fadeIn(1000);
		
		$(".hero:nth-of-type(1) img").animate({left: '+=80%', opacity: '0.5'}, options);
		$(".hero:nth-of-type(2) img").animate({left: '-=80%', opacity: '0.5'}, options);
		
		$(".hero:nth-of-type(1) img").animate({left: '-=80%', opacity: '1'}, options);
		$(".hero:nth-of-type(2) img").animate({left: '+=80%', opacity: '1'}, options);
	});
	
	
	
	
});


	
	