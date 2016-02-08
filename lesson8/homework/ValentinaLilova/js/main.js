/*
	on mouse over the button the gif should start repeating itself
*/

function getRandoomNumbers()
{
	var iztegleni = new Array();

	while(iztegleni.length < 6)
	{	
		var number = (Math.random() * 49 + 1)|0; 

		if(iztegleni.indexOf(number) == -1)
		{
			iztegleni[iztegleni.length] = number;
		}
	}
	
	iztegleni.sort(function(a, b){return a-b});
	
	document.getElementById("num0").innerHTML = iztegleni[0];
	document.getElementById("num1").innerHTML = iztegleni[1];
	document.getElementById("num2").innerHTML = iztegleni[2];
	document.getElementById("num3").innerHTML = iztegleni[3];
	document.getElementById("num4").innerHTML = iztegleni[4];
	document.getElementById("num5").innerHTML = iztegleni[5];
	
	
	
	
	var izbrani = document.querySelectorAll('body p input');
	var br = 0;
	
	for(i=0; iztegleni.length < 6; i++)
	{	
		for(j=0; izbrani.length < 6; i++)
		{	
			if(iztegleni[i]==izbrani[j]) br++;
		}
	}
	
	document.getElementById("brGuessed").innerHTML = "You have guessed " + br + " numbers.";
	
	/*
	alert("You have guessed " + br + " numbers.")
	
	*/
}