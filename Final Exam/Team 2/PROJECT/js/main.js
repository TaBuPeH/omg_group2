
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
	
	$("img#closeButton").click(function()
	{
		$(".topButtons").css({
			backgroundColor: "",
		})
		
		$("#forms").css('visibility','hidden');
		$("#loginForm").css('visibility','hidden');
		$("#registerForm").css('visibility','hidden');
		
		$("#content").css('visibility','visible');
	});

	
	
	
	
	$("#loginForm .registrationButton").click(function()
	{
		$("#loginForm").css('visibility','hidden');
		$("#registerForm").css('visibility','visible');
		$("h2").text("Register Here");
	});
	/*$(document).on('click',"#loginForm .loginButton", function()
	{
		$.post( "login_db.php", $('#loginForm').serialize() , function( data ) {
			alert( data );
		});
		 ??? 
		
		
	});*/
	
	$("#registerForm .loginButton").click(function()
	{
		$("#registerForm").css('visibility','hidden');
		$("#loginForm").css('visibility','visible');
		$("h2").text("Login Here");
	});
	/*$(document).on('click',"#registerForm .registrationButton", function()
	{
		$.post( "register_db.php", $('#registerForm').serialize() , function( data ) {
			alert( data );
		});
		 ??? 
		
		
	});*/
	
	
	
	
	/*	*/

	$("#heroButton").click(function()
	{
		$(".topButtons").css({
			backgroundColor: "",
		})
		$(this).css({
			backgroundColor: "#75c1dd",
		});
		
		$("#registerForm").css('visibility','hidden');
		$("#loginForm").css('visibility','hidden');
		$("h2").text("Create a hero");
		$("#forms").css('visibility','visible')
		
		$("#content").css('visibility','hidden');
	});
	
	/*	*/
	
	$("#profButton").click(function()
	{
		$(".topButtons").css({
			backgroundColor: "",
		})
		$(this).css({
			backgroundColor: "#75c1dd",
		});
		
		$("#loginForm").css('visibility','hidden');
		$("#registerForm").css('visibility','hidden');
		$("h2").text("Your profile");
		$("#forms").css('visibility','visible')
		
		$("#content").css('visibility','hidden');
	});
	
	/*	*/
	
});
