
document.addEventListener("DOMContentLoaded", function(event) { 
	
	
	$("#logButton").click(function()
	{
		$(".topButtons").css({
			borderBottom : "2px solid #0099CC",
			backgroundColor: "#0099CC",
			borderRadius: "0px",
		})/*;$(".topButtons:hoover").css({
			borderBottom : "2px solid #75c1dd",
		});*/
		$(this).css({
			borderBottom : "2px solid #75c1dd",
			backgroundColor: "#75c1dd",
			borderRadius: "6px",
		});
		
		$("h2").text("Login Here");
		$("#forms").css('visibility','visible');
		$("#loginForm").css('visibility','visible');
	});

	$("#heroButton").click(function()
	{
		
		
		
	});
	
	$("#profButton").click(function()
	{
		
		
		
	});
	
	$("img#closeButton").click(function()
	{
		$(".topButtons").css({
			borderBottom : "2px solid #0099CC",
			backgroundColor: "#0099CC",
			borderRadius: "0px",
		})/*;$(".topButtons:hoover").css({
			borderBottom : "2px solid #75c1dd",
		});*/
		
		$("#forms").css('visibility','hidden');
		$("#loginForm").css('visibility','hidden');
		$("#registerForm").css('visibility','hidden');
	});

	/*	*/
	
	$("#loginForm #loggingButton").click(function()
	{
		
		
		
	});
	$("#loginForm #registratingButton").click(function()
	{
		$("#loginForm").css('visibility','hidden');
		$("#registerForm").css('visibility','visible');
		$("h2").text("Register Here");
		
		
	});
	
	$("#registerForm #loggingButton").click(function()
	{
		$("#registerForm").css('visibility','hidden');
		$("#loginForm").css('visibility','visible');
		$("h2").text("Login Here");
		
		
	});
	$("#loginForm #registratingButton").click(function()
	{
		$("#loginForm").css('visibility','hidden');
		$("#registerForm").css('visibility','visible');
		$("h2").text("Register Here");
		
		
	});
	$("#registerFormForm #registratingButton").click(function()
	{
		
		
	});
	
});






	
	