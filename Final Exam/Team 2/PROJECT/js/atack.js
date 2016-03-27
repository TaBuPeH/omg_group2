	
document.addEventListener("DOMContentLoaded", function(event) { 
	
	var options = {
		duration: 1000,
		easing: 'swing' //easeInOutQuint
	};
		
	$(".hero:first-of-type img").click(function()
	{
		var hero1 = $(this);
		hero1.animate({left: '+=100%', opacity: '0.5'}, options);
		hero1.animate({left: '-=100%', opacity: '1'}, options);
		
	});
	$(".hero:last-of-type img").click(function()
	{
		var hero1 = $(this);
		hero1.animate({left: '-=100%', opacity: '0.5'}, options);
		hero1.animate({left: '+=100%', opacity: '1'}, options);
		
	});
	
	
	$(" ").click(function()
	{
		
		
	});
	
	
	
});


/*	*/
	