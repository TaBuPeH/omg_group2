
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
		$("#lf").css('visibility','visible');
		$("#loginForm").css('visibility','visible');
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
		
		$("#lf").css('visibility','hidden');
		$("#loginForm").css('visibility','hidden');
		$("#registerForm").css('visibility','hidden');
	});
	
	$("#loginForm .loginButton").click(function()
	{
		
		
		
	});
	$("#loginForm .registrationButton").click(function()
	{
		$("#loginForm").css('visibility','hidden');
		$("#registerForm").css('visibility','visible');
		$("h2").text("Register Here");
		
		
	});
	
	$("#registerForm .loginButton").click(function()
	{
		$("#registerForm").css('visibility','hidden');
		$("#loginForm").css('visibility','visible');
		$("h2").text("Login Here");
		
		
	});
	$("#loginForm .registrationButton").click(function()
	{
		$("#loginForm").css('visibility','hidden');
		$("#registerForm").css('visibility','visible');
		$("h2").text("Register Here");
		
		
	});
	$("#registerFormForm .registrationButton").click(function()
	{
		
		
	});
	
	
	
	

	$("#heroButton").click(function()
	{
		
		
		
	});
	
	$("#profButton").click(function()
	{
		
		
		
	});
	
	/*	*/
	
});

