var a = 5;

var z = 8;

function x()
{
    var a = 7;
	alert(a);
	
	z = function()
	{
		
	    var a = 9;
		alert(this.a);
		
	};
	
}

x();
z();
alert(a);


x.addEventListener("", function(){   });


//alert(a);

