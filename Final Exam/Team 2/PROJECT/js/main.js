
$(document).ready( function(event) { 
	
	$("#logButton").click(function()
	{
		$(".topButtons").css({
			backgroundColor: "",
		})
		$(this).css({
			backgroundColor: "#75c1dd",
		});
		
		$("h2").text("Login Here");
		$("#forms").css('visibility','visible');
		$("#loginForm").css('visibility','visible');
		
		$("#content").css('visibility','hidden');
	});
	
	$("img#closeButton").click(function()   //, .opened
	{
		$(".topButtons").css({
			backgroundColor: "",
		})
		
		$("#forms").css('visibility','hidden');
		$("#loginForm").css('visibility','hidden');
		$("#registerForm").css('visibility','hidden');
		
		//$("#content").css('visibility','visible');
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
	
	
	
/*  */


	$("#heroButton").click(function()	//.not('.opened')
	{
		$("#registerForm").css('visibility','hidden');
		$("#loginForm").css('visibility','hidden');
		$("#forms").css('visibility','hidden')
		$(".topButtons").css({
			backgroundColor: "",
		})
		$(this).css({
			backgroundColor: "#75c1dd",
		});
		$(this).addClass('opened');
		$("#content").css('visibility','visible');	

		
	});

	/*$(".opened#heroButton").click(function()
	{
		alert("shbugv");
		
		$(this).css({
			backgroundColor: "",
		});
		$(this).removeClass('opened');
	 	$("#content").css('visibility','hidden');

	 });
	*/
	
});
