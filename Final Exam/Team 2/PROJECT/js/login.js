
//document.addEventListener("DOMContentLoaded", function(event) { 

//});
	

$("#loginForm .loginButton").click( function() {
	
//	alert( "clicked" );

/*
	if$("#username").val() == "" || $("#password".val() == "" )
	{
		alert("Please nenter both username and password");
	}
	else
	{
		//$.post($)
		$.post( "login_db.php", $('#loginForm').serialize() , function( data ) {
			//alert( data );
			$("#forms h2").html(data);
		});
	}

	$("#loginForm").submit(function(){
		
		return false;

	});*/

});
$("#registerForm .registrationButton").click( function() {
	
	//alert( "clicked" );
	$.post( "register_db.php", $('#registerForm').serialize() , function( data ) {
		$("#registerForm").css('visibility','hidden');
		$("#loginForm").css('visibility','visible');
		$("h2").text("Login Here");
		//$("#forms h2").html(data);
	});

/*
	if$("#username").val() == "" || $("#password".val() == "" )
	{
		alert("Please nenter both username and password");
	}
	else
	{
		$.post( "register_db.php", $('#registerForm').serialize() , function( data ) {
			alert( data );
			//$("#forms h2").html(data);
		});

	}

	$("#loginForm").submit(function(){
		
		return false;

	});*/

});