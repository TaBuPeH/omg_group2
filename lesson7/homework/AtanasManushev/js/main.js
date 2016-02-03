function test(){

	var number = document.getElementById("number").value;
	
		if (number < 100) {
			alert("Input number bigger than 99");
	
		}
		if (number > 999) {
			alert("Input number smaller than 999");
			
		}
		if ((number > 99) && (number <= 999)){
			var a = Math.floor(number/100);
			var b = Math.floor(number/10%10);
			var c = Math.floor(number%10);
			var x=a+b+c;
			if (x == 13){
				alert("yes");
			}
			if (x != 13){
				alert("no");
			}
		}
}