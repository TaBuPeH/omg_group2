var array = [];

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
	while (iztegleni.length < 6) 
	{
		console.log(i);
	}
	
	/*
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
	*/
	
	alert(iztegleni);
}