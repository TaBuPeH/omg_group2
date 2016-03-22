
$(document).ready( function()
	{
		hero1 = $('.heroes img') /* :first-of-type  */
		hero2 = $('.heroes img') /* :last-of-type  */
		
		$('.heroes img').click(function()
		{
			if (hero1.hasClass('atack'))
			{	
				moveFromLeft($(this));
			}
			if (hero2.hasClass('atack'))
			{
				moveFromRight($(this));
			}
		}

	});
	
	
	
	
	
	