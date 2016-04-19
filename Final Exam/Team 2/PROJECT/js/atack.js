	
document.addEventListener("DOMContentLoaded", function(event) { 
	
	var options = {
		duration: 1000,
		easing: 'swing' //easeInOutQuint
	};
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
	
	$(".attack").click(function()
	{	
		$(this).fadeOut(1000).delay(800).fadeIn(1000);
	
		$(".hero:nth-of-type(1) img").animate({left: '+=80%', opacity: '0.5'}, options);
		$(".hero:nth-of-type(2) img").animate({left: '-=80%', opacity: '0.5'}, options);
		
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
	
	
	
	/*
	$(".defence").click(function()
	{
		$(this).parent().parent().fadeOut(700).delay(1400).fadeIn(700);
	});
	*/
});


	
	