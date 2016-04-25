	
document.addEventListener("DOMContentLoaded", function(event) { 
	var attackerHP;
	var defenderHP;
	var options = {
<<<<<<< HEAD
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
=======
		duration: 1400,
		easing: 'swing' 
		//easing: 'easeInOutQuint'
		//easeInOutQuint/easeInOutCubic
	};

	var isAnimating = false;


	/*
	//var heroWidth = $(".hero img").width();
	var width = $(window).width();
	//alert(width);
	var beforeWidth = width/5;
	if (width < 1024) beforeWidth = width/4;
	if (width < 640) beforeWidth =  width/2;
	var actionWidth = beforeWidth/5;
	
	
	//var offset = $("#heroes").offset();
	//alert(offset.left);
	
	
	var $attackImg = $( "<img src='../img/attack.png' class='action attack'>");
	var $specialAbilityImg = $("<img src='../img/specialAbility.png' class='action specialAbility'>");
	var $defenceImg = $( "<img src='../img/defence.png' class='action defence'>");
	var $restImg = $( "<img src='../img/rest.png' class='action rest'>");
	
	$( "div#heroes .hero img" ).before( "<div class='before'> </div>");
	$( ".before" ).append($attackImg, $specialAbilityImg, $defenceImg, $restImg);
	$( ".before" ).css({width: beforeWidth});
	//$('head').append('<style>.action{width:5% !important;}</style>');
	
	$(".action").css({width: actionWidth, position: "absolute", display:"block", zIndex: "400", bottom: "15%"}); //
	
	$(".action:nth-of-type(1)").css({marginLeft: "0%", marginRight: "18%"});
	$(".action:nth-of-type(2)").css({marginLeft: "6%", marginRight: "12%"});
	$(".action:nth-of-type(3)").css({marginLeft: "12%", marginRight: "6%"});
	$(".action:nth-of-type(4)").css({marginLeft: "19%", marginRight: "-1%"});
	
*/

	$(".actions:nth-of-type(1) .attack").click(function()
	{
		if(isAnimating==false)
		{
			isAnimating = true;
			$(this).fadeOut(1000).delay(1600).fadeIn(1000, function(){
					isAnimating = false;	
				});
			
			$(".hero:nth-of-type(1) img").animate({left: '+=160%', opacity: '0.5'}, options);
			$(".hero:nth-of-type(1) img").animate({left: '-=160%', opacity: '1'}, options);
		}
	});
	$(".actions:nth-of-type(2) .attack").click(function()
	{
		if(isAnimating==false)
		{
			isAnimating = true;
			$(this).fadeOut(1000).delay(1600).fadeIn(1000, function(){
					isAnimating = false;	
				});
			
			$(".hero:nth-of-type(2) img").animate({left: '-=160%', opacity: '0.5'}, options);
			$(".hero:nth-of-type(2) img").animate({left: '+=160%', opacity: '1'}, options);
		}
>>>>>>> d3ee13355514b2ecd4ecd0a045e7227aae51b1aa
	});

	$(".actions:nth-of-type(1) .rest").click(function()
	{
		if(isAnimating == false)
		{
			isAnimating = true;
			$(this).fadeOut(1000).delay(1900).fadeIn(1000, function(){
					isAnimating = false;	
				});
			
			$(".hero:nth-of-type(1) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(1) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(1) img").fadeOut(500).delay(50).fadeIn(500);
		}
		
	});
	$(".actions:nth-of-type(2) .rest").click(function()
	{
		if(isAnimating == false)
		{
			isAnimating = true;
			$(this).fadeOut(1000).delay(1900).fadeIn(1000, function(){
					isAnimating = false;	
				});
			
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
		}

	});

	$(".actions:nth-of-type(1) .specialAbility").click(function()
	{
		if(isAnimating==false)
		{
			isAnimating = true;
			$(this).fadeOut(1000).delay(2800).fadeIn(1000, function(){
					isAnimating = false;	
				});
			
			$(".hero:nth-of-type(1) img").animate({left: '+=80%', top: '-=100%', width: "toggle", height: "toggle"}, options);
			$(".hero:nth-of-type(1) img").animate({left: '+=80%', top: '+=100%', width: "toggle", height: "toggle"}, options);
			$(".hero:nth-of-type(1) img").animate({left: '-=160%'}, options);
		}
	});
	$(".actions:nth-of-type(2) .specialAbility").click(function()
	{
		if(isAnimating==false)
		{
			isAnimating = true;
			$(this).fadeOut(1000).delay(2800).fadeIn(1000, function(){
					isAnimating = false;	
				});
			
			$(".hero:nth-of-type(2) img").animate({left: '-=80%', top: '-=100%', width: "toggle", height: "toggle"}, options);
			$(".hero:nth-of-type(2) img").animate({left: '-=80%', top: '+=100%', width: "toggle", height: "toggle"}, options);
			$(".hero:nth-of-type(2) img").animate({left: '+=160%'}, options);
		}
	});
	
	
	
<<<<<<< HEAD
	
=======
	/*
	$(".defence").click(function()
	{
		$(this).parent().parent().fadeOut(500).delay(1400).fadeIn(500);
	});
	*/
>>>>>>> d3ee13355514b2ecd4ecd0a045e7227aae51b1aa
});


	
	