document.addEventListener("DOMContentLoaded", function(event) { 
	
	
	
	
	
	
	document.getElementById("hero").click(function()
	{
		var elementToAnimate = document.getElementById("faster");
		var pos = 0;
		var id = setInterval(frame, 5);
		function frame() 
		{
			if (pos == 175) 
			{
				clearInterval(id);
			} 
			else 
			{
				pos++; 
				elem.style.left = pos + 'px'; 
			}
		}
	});
	
};
