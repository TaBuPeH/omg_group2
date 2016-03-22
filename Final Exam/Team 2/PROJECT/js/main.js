document.addEventListener("DOMContentLoaded", function(event) {
	
	var logButton = document.getElementById("loggingButton");
	var regButton = document.getElementById("registratingButton");
	
	function login()
	{
		document.getElementById("loginForm").style.display = "block";
		
	} 
	
	function registrate()
	{
		
		
	} 

	logButton.addEventListener("click", login );
	regButton.addEventListener("click", registrate );

	


});






	
	