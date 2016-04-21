	
document.addEventListener("DOMContentLoaded", function(event) { 
	
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
			var url = "play.php?attacker=0&defender=1";
		}	
		else
		{
			var url = "play.php?attacker=1&defender=0";
		}
		$.get(url,function(response){
			
			console.log(response);
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


	
	