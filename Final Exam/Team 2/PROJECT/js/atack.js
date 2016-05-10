	
document.addEventListener("DOMContentLoaded", function(event) { 
	
	var options = {
		duration: 1000,
		easing: 'swing' 
	};
	var isAnimating = false;
	var heroPlayed = Math.floor((Math.random() * 2) + 1);

	setTimeout(function(){
		if(heroPlayed==1)
			$("#currentTurn").text("Right Player's Turn");
		else
			$("#currentTurn").text("Left Player's Turn");
	}, 2300);


	//da ne moje da stane sus poweche ot maximalniq health
	//... player wins => restart the game

	
	$(".actions:nth-of-type(1) .attack").click(function(){

		if((isAnimating==false) && (heroPlayed==2))
		{
			heroPlayed = 1;
			isAnimating = true;
			$(this).fadeOut(1000).delay(1600).fadeIn(1000, function(){
				isAnimating = false;	
			});
			
			$(".hero:nth-of-type(1) img").delay(200).animate({left: '+=130%', opacity: '0.5'}, options).delay(200);
			$(".hero:nth-of-type(1) img").animate({left: '-=130%', opacity: '1'}, options);

			$("#currentTurn").text("");


			if($(this).closest('.hero_0_actions').length) // .length==1)  zashto raboti??? kakwo e uslowieto
			{
				var url= "normalAttack.php?attacker=0&defender=1";
				var url1= "attackResult.php?dmg_dealt=0";
			}	
			else
			{
				var url= "attackResult.php?dmg_dealth=1";
			}

			$.get(url, function(response){
				
				if(parseFloat(response) == -100)
				{
					$(".topButtons").css({
						backgroundColor: "",
					})
					$("#content").css('visibility','hidden');
					$("#currentTurn").text("");

					// resetwa jiwota im za nowa igra w html-a
					//no ne i w bazata danni
					$(".health #hero1").html("<span>Health:</span> 130/130");
					$(".health #hero2").html("<span>Health:</span> 150/150");

					$("#winner").css("visibility", "visible");
					$("#winner").text("LEFT PLAYER WINS!");
				}
				else
				{
					$("#hero2").text("Health: " + response + "/150");
					setTimeout(function(){
						$("#currentTurn").text("Right Player's Turn");
					}, 2300);
				}
			});

			$.get(url1,function(response){
				$("#divRightHero").text(response).fadeIn(500).delay(3300).fadeOut(500);
			});
		}
	});


	$(".actions:nth-of-type(1) .rest").click(function(){

		if((isAnimating==false) && (heroPlayed==2))
		{
			heroPlayed = 1;
			isAnimating = true;
			$(this).fadeOut(1000).delay(2100).fadeIn(1000, function(){
					isAnimating = false;	
				});
			$(".hero:nth-of-type(1) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(1) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(1) img").fadeOut(500).delay(50).fadeIn(500);
			
			$("#currentTurn").text("");


			if($(this).closest('.hero_0_actions').length)
			{
				var url= "rest.php?attacker=0&defender=1";
			}	
			else
			{
				var url= "rest.php?attacker=1&defender=0";	
			}
			$.get(url,function(response){

				if(response != "over")
				{
					$("#hero1").text("Health: " + response + "/130");
				}
				else
				{
					$("#currentTurn").text("RIGHT PLAYER WINS!");	//nqma kak da swyrshi igrata, ne e nujno
				}
			});

			setTimeout(function(){
	    		$("#currentTurn").text("Right Player's Turn");
	  		}, 3700);

	  		$("#divLeftHero").text("+5").fadeIn(500).delay(3700).fadeOut(500);
		}
	});


	$(".actions:nth-of-type(1) .specialAbility").click(function(){

		if((isAnimating==false) && (heroPlayed==2))
		{
			heroPlayed = 1;
			isAnimating = true;
			$(this).fadeOut(1000).delay(2000).fadeIn(1000, function(){
				isAnimating = false;	
				});
			$(".hero:nth-of-type(1) img").animate({left: '+=110%', top: '-=10%', width: "+=10%", height: "+=10%"}, options).delay(300);
			$(".hero:nth-of-type(1) img").animate({left: '-=110%', top: '+=10%', width: "-=10%", height: "-=10%"}, options);

			$("#currentTurn").text("");

			if($(this).closest('.hero_0_actions').length)
			{
				var url= "warrior_specialAttack.php?attacker=0&defender=1";
				var url1= "attackResult.php?dmg_dealt=0";
			}
			else
			{
				var url= "warrior_specialAttack.php?attacker=1&defender=0";
				var url1= "attackResult.php?dmg_dealt=0";
			}

			$.get(url,function(response){

				if(parseFloat(response) == -100)
				{
					$(".topButtons").css({
						backgroundColor: "",
					})
					$("#content").css('visibility','hidden');
					$("#currentTurn").text("");

					// resetwa jiwota im za nowa igra w html-a
					//no ne i w bazata danni
					$(".health #hero1").html("<span>Health:</span> 130/130");
					$(".health #hero2").html("<span>Health:</span> 150/150");

					$("#winner").css("visibility", "visible");
					$("#winner").text("LEFT PLAYER WINS!");
				}
				else
				{
					$("#hero2").text("Health: " + response + "/150");
					setTimeout(function(){
					    $("#currentTurn").text("Right Player's Turn");
					}, 2900);
				}
			
			});

			$.get(url1,function(response){
				$("#divRightHero").text(response).fadeIn(500).delay(3800).fadeOut(500);
			});
		}
	});
	

	/*************************/
	
	
	$(".actions:nth-of-type(2) .attack").click(function(){

		if((isAnimating==false) && (heroPlayed==1))
		{
			heroPlayed = 2;
			isAnimating = true;
			$(this).fadeOut(1000).delay(1600).fadeIn(1000, function(){
					isAnimating = false;	
				});
			
			$(".hero:nth-of-type(2) img").animate({left: '-=130%', opacity: '0.5'}, options);
			$(".hero:nth-of-type(2) img").animate({left: '+=130%', opacity: '1'}, options);

			$("#currentTurn").text("");


			if($(this).closest('.hero_0_actions').length)  // .closest('.hero_1_actions').length==1)  ???
			{
				var url= "normalAttack.php?attacker=0&defender=1";
			}	
			else
			{
				var url= "normalAttack.php?attacker=1&defender=0";
				var url1= "attackResult.php?dmg_dealt=0";
			}

			$.get(url,function(response){
				//console.log(response);

				if(parseFloat(response) == -100)
				{
					$(".topButtons").css({
						backgroundColor: "",
					})
					$("#content").css('visibility','hidden');
					$("#currentTurn").text("");
					
					// resetwa jiwota im za nowa igra w html-a
					//no ne i w bazata danni
					$(".health #hero1").html("<span>Health:</span> 130/130");
					$(".health #hero2").html("<span>Health:</span> 150/150");

					$("#winner").css("visibility", "visible");
					$("#winner").text("RIGHT PLAYER WINS!");
				}
				else
				{
					$("#hero1").text("Health: " + response + "/150");

					setTimeout(function(){
    					$("#currentTurn").text("Left Player's Turn");
					}, 2500);
				}
			
				$("#hero1").text("Health: " + response + "/130");

				$.get(url1,function(response){
					$("#divLeftHero").text(response).fadeIn(500).delay(3300).fadeOut(500);
				});
			});
		}
	});
	
	$(".actions:nth-of-type(2) .rest").click(function(){

		if((isAnimating==false) && (heroPlayed==1))
		{
			heroPlayed = 2;
			isAnimating = true;
			$(this).fadeOut(1000).delay(2100).fadeIn(1000, function(){
				isAnimating = false;	
			});
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
			
			$("#currentTurn").text("");


			if($(this).closest('.hero_0_actions').length)
			{
				var url= "rest.php?attacker=0&defender=1";
			}	
			else
			{
				var url= "rest.php?attacker=1&defender=0";
			}

			setTimeout(function(){
				$("#currentTurn").text("Left Player's Turn");
			}, 3500);

			$.get(url,function(response){
				$("#hero2").text("Health: " + response + "/150");
			});

			$("#divRightHero").text("+5").fadeIn(1000).delay(3200).fadeOut(1000);
		}
	});
	
	$(".actions:nth-of-type(2) .specialAbility").click(function(){

 		if((isAnimating==false) && (heroPlayed==1))
		 {
		 	heroPlayed = 2;
			isAnimating = true;
			$(this).fadeOut(1000).delay(5000).fadeIn(1000, function(){
				isAnimating = false;	
			});
			$(".hero:nth-of-type(2) img").animate({left: '-=60%', top: '-=30%', width: "toggle", height: "toggle"}, options).delay(1000);
			$(".hero:nth-of-type(2) img").animate({left: '+=60%', top: '+=30%', width: "toggle", height: "toggle"}, options);
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
			
			$("#currentTurn").text("");


			if($(this).closest('.hero_0_actions').length)
			{
				var url= "healer_specialAbility.php?attacker=0&defender=1";
				var url1= "attackResult.php?dmg_dealt=0";
			}	
			else
			{
				var url= "healer_specialAbility.php?attacker=1&defender=0";
				var url1= "attackResult.php?dmg_dealt=0";
			}

			$.get(url,function(response){
				$("#hero2").text("Health: " + response + "/150");
			});

			setTimeout(function()
			{
			    $("#currentTurn").text("Left Player's Turn");
			}, 6500);

			$.get(url1,function(response){
				$("#divRightHero").text("+" + response).fadeIn(1000).delay(6000).fadeOut(1000);
			});	
		}
	});
});




// $.ajax({

                // url:"attackResult.php",
                // type:"GET",
                // success:function(result){

			 // $(".actions:nth-of-type(1) .attack").click(function(){
					 // var val=1;
			 
					
				 // });
                  // if(val == 1)
				  // {
					  // alert(val);
					// }   

                // }
				
            // });
	
	