var array = [];

function getRandoomNumbers()
{
	/*
	function getRandomInt(min, max) 
	{
	  return Math.floor(Math.random() * (max - min + 1) + min);
	}
	*/

	var iztegleni = new Array();

	// How to properly draw a random number in javascript
	// do this 6/42
	// sort the array ascending
	// do this with For and reverse checking - 2 for cycle within eachother

	while(iztegleni.length < 6)
	{	
		var number = (Math.random() * 42 + 1)|0; 

		if(iztegleni.indexOf(number) == -1)
		{
			iztegleni[iztegleni.length] = number;
		}
	}
	
	/*
	iztegleni.sort(function(a, b){return a-b});
	while (iztegleni.length < 6) 
	{
		console.log(i);
	}
	*/
	
	var tmp;
	for (i = 0; i < 6; i++)
	{		
		for (j = 0 ; j < 6 ; j++)
		{
			
			if (iztegleni[j] > iztegleni[i]) 
			{
				tmp = iztegleni[j];
				iztegleni[j] = iztegleni[i];
				iztegleni[i] = tmp;
			}
		}
	}
	
	
	alert(iztegleni);
}