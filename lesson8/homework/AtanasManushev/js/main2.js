document.addEventListener("DOMContentLoaded", function(event) {
	
	var generate = document.getElementById("clickme");
	
	generate.addEventListener("click" , function() {
	
		var inputs = document.querySelectorAll("body div input")
			for(i=0; i<inputs.length; i++)
			{
				var numbers = Array();

					while(numbers.length < 6)
						{
							var nomer = Math.round(Math.random()*49) + 1;

							if(numbers.indexOf(nomer) == -1)
							{
								numbers[numbers.length] = nomer;
				
								inputs[i].value = nomer;
							}
						}
	
			}
	});
});