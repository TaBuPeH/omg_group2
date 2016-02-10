$(document).ready(function(){
	
	
	$('.gallery img').each(function(){
		
		var ourNewCircle = 	'<div class="circle"></div>';
		$('.circles').append(ourNewCircle);
		
	});
	
	
	
	
	
	
	
	var isAnimating = false;
	
	$('.gallery img').click(function(){
		
	
		if(isAnimating == false)
		{
			
			isAnimating = true;
			
			$(this).animate( {left:"-100%"} , 1000, function(){ 
				$(this).css( {left: "100%", display:"none"} );
				isAnimating = false;
				
			} );
			var elementToAnimate = $(this).next();
			if(elementToAnimate.length == 0)
			{
				elementToAnimate = $('.gallery img:first-of-type');
			}
				elementToAnimate.css({display: "block"});
			elementToAnimate.animate({left:"0%"}, 1000);
		}
		
		
	});
	
	
	
	$('.circle').click(function(){
		
		
		if(isAnimating == false)
		{



			if( $('.gallery img:visible').index()  !=  $(this).index())
			{



				if($('.gallery img:visible').index()  <   $(this).index())
				{
					
					
					 
					isAnimating = true;					
					$('.gallery img:visible').animate( {left:"-100%"} , 1000, function(){ 
						
						$(this).css( {left: "100%", display:"none"} );
						isAnimating = false;
						
					} );
					
					var currentNumber = $(this).index();
					var nextImage = $('.gallery img').eq(currentNumber);
					nextImage.css('display','block');
					nextImage.animate({left:"0%"}, 1000);
				}
				else
				{
					var currentNumber = $(this).index();
					var nextImage = $('.gallery img').eq(currentNumber);
					nextImage.css({left:"-100%"});
				
					isAnimating = true;					
					$('.gallery img:visible').animate( {left:"100%"} , 1000, function(){ 
						
						$(this).css( { display:"none" } );
						isAnimating = false;
						
					} );

					nextImage.css('display','block');
					nextImage.animate({left:"0%"}, 1000);
					
				}		
				 
			}
		}
		
		
	});
});