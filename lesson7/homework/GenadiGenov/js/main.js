var x=100;
var y=999;
var result;
var test;

function getRandomArbitrary(min, max) 
{
	return Math.random() * (max - min) + min;
}

result = parseInt( getRandomArbitrary(x, y) );
//test=840;

console.log(result);
//console.log(test);
//console.log(parseInt(test/100));
//console.log(parseInt(test/10%10));
//console.log(test%10);
if ( ( parseInt(result/100) + parseInt(result/10%10) + (result%10) ) == 13)
{
	alert("yes")
}
else
{
	alert("nope")
}




var pulledout = Array();

while(pulledout.length < 6)
{
	var number = parseInt(Math.random()*42) + 1;
	console.log(number)
	if(pulledout.indexOf(number) == -1)
	{
		pulledout[pulledout.length] = number;
	}

}
pulledout.sort(function(a, b){return a-b});
console.log(pulledout);
