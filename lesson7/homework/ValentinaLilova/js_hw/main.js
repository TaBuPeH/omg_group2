function sum13()
{
	var number = document.getElementById("number").value;
	
	if ((number < 100)||(number > 999)) 
	{
		alert("Your number isn't valid.");
	}
	
	else 
	{
		var a = Math.floor(number/100);
		var b = Math.floor(number/10%10);
		var c = Math.floor(number%10);
		
		var x=a+b+c;
		
		if (x == 13) alert("yes");
		else alert("no");
	}
	
}