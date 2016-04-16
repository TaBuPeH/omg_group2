	
document.addEventListener("DOMContentLoaded", function(event) { 
	
	var options = {
		duration: 1000,
		easing: 'swing' //easeInOutQuint
	};
	
	var heroWidth = $(".hero img").width();
	var actionWidth = heroWidth/4;
	/*
	var offset = $("#heroes").offset();
	//alert(offset.left);
    

	$(".hero img").click(function()
	{
		var hero = $(this);
		
		if (hero == $(".hero:nth-of-type(1) img")) 
		{
			hero.animate({left: '+=100%', opacity: '0.5'}, options);
			hero.animate({left: '-=100%', opacity: '1'}, options);
		}
		else
		{
			var indexOffset = $("#heroes").offset()
			hero.animate({left: "offset.left", opacity: '0.5'}, options);
			hero.animate({left: '+=100%', opacity: '1'}, options);
		}
    
	});
	*/
	
	var $attackImg = $( "<img src='../img/attack.png' class='action attack'>");
	var $superAttackImg = $("<img src='../img/superAttack.png' class='action superAttack'>");
	var $defenceImg = $( "<img src='../img/defence.png' class='action defence'>");
	var $healImg = $( "<img src='../img/heal.png' class='action heal'>");
	
	$( "div#heroes .hero img" ).before( "<div class='before'> </div>");
	$( ".before" ).append($attackImg, $superAttackImg, $defenceImg, $healImg);
	/*$('head').append('<style>.action{width:5% !important;}</style>');*/
	
	$(".action").css({width: actionWidth, position: "absolute", display:"inline", zIndex: "400", bottom: "15%"}); //
	
	$(".action:nth-of-type(1)").css({marginLeft: "0%", marginRight: "18%"});
	$(".action:nth-of-type(2)").css({marginLeft: "6%", marginRight: "12%"});
	$(".action:nth-of-type(3)").css({marginLeft: "12%", marginRight: "6%"});
	$(".action:nth-of-type(4)").css({marginLeft: "19%", marginRight: "-1%"});
	

	
	$(".attack").click(function()
	{	
		$(".hero:nth-of-type(1) img").animate({left: '+=80%', opacity: '0.5'}, options);
		$(".hero:nth-of-type(2) img").animate({left: '-=80%', opacity: '0.5'}, options);
		
		$(".hero:nth-of-type(1) img").animate({left: '-=80%', opacity: '1'}, options);
		$(".hero:nth-of-type(2) img").animate({left: '+=80%', opacity: '1'}, options);
	});
	$(".superAttack").click(function()
	{
		$(".hero:nth-of-type(1) img").animate({left: '+=80%', opacity: '0.5'}, options);
		$(".hero:nth-of-type(2) img").animate({left: '-=80%', opacity: '0.5'}, options);
		
		$(".hero:nth-of-type(1) img").animate({left: '-=80%', opacity: '1'}, options);
		$(".hero:nth-of-type(2) img").animate({left: '+=80%', opacity: '1'}, options);
	});
	$(".defence").click(function()
	{
		$(this).parent().parent().fadeOut(700).delay(1400).fadeIn(700);
	});
	$(".heal").click(function()
	{
		$(this).parent().parent().fadeOut(600).delay(10).fadeIn(600);
		$(this).parent().parent().fadeOut(600).delay(10).fadeIn(600);
		$(this).parent().parent().fadeOut(600).delay(10).fadeIn(600);
	});
	
	
});


/*	*/
	