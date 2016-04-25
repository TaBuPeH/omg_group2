	
document.addEventListener("DOMContentLoaded", function(event) { 
	
	var options = {
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
			
			$(".hero:nth-of-type(1) img").animate({left: '+=140%', opacity: '0.5'}, options);
			$(".hero:nth-of-type(1) img").animate({left: '-=140%', opacity: '1'}, options);
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
			
			$(".hero:nth-of-type(2) img").animate({left: '-=140%', opacity: '0.5'}, options);
			$(".hero:nth-of-type(2) img").animate({left: '+=140%', opacity: '1'}, options);
		}
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
			
			$(".hero:nth-of-type(1) img").animate({left: '+=70%', top: '-=100%', width: "toggle", height: "toggle"}, options);
			$(".hero:nth-of-type(1) img").animate({left: '+=70%', top: '+=100%', width: "toggle", height: "toggle"}, options);
			$(".hero:nth-of-type(1) img").animate({left: '-=140%'}, options);
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
			
			$(".hero:nth-of-type(2) img").animate({left: '-=70%', top: '-=100%', width: "toggle", height: "toggle"}, options);
			$(".hero:nth-of-type(2) img").animate({left: '-=70%', top: '+=100%', width: "toggle", height: "toggle"}, options);
			$(".hero:nth-of-type(2) img").animate({left: '+=140%'}, options);
		}
	});
	
	
	
	/*
	$(".defence").click(function()
	{
		$(this).parent().parent().fadeOut(500).delay(1400).fadeIn(500);
	});
	*/
});


	
	