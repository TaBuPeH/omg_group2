	
document.addEventListener("DOMContentLoaded", function(event) { 
	
	var options = {
		duration: 1000,
		easing: 'swing' 
	};
	var isAnimating = false;
	var nextTurn=1;

	
	$(".actions:nth-of-type(1) .attack").click(function(){

		if(isAnimating==false)
		{
			isAnimating = true;
			$(this).fadeOut(1000).delay(1600).fadeIn(1000, function(){
				isAnimating = false;	
			});
			
			$(".hero:nth-of-type(1) img").animate({left: '+=130%', opacity: '0.5'}, options);
			$(".hero:nth-of-type(1) img").animate({left: '-=130%', opacity: '1'}, options);



			if($(this).closest('.hero_0_actions').length) // .length==1)  ???kakwo e uslowieto
			{
				var url= "normalAttack.php?attacker=0&defender=1";
				var url1= "attackResult.php?dmg_dealt=0";
			}	
			else
			{
				var url= "attackResult.php?dmg_dealth=1";
			}

			$.get(url, function(response){
				
				console.log(response);
				
				//document.getElementById("hero1").innerHTML = response;
				if(parseFloat(response) == -100)
				{
					document.getElementById("currentTurn").innerHTML = "LEFT PLAYER WINS!";
					// kato pobedi da spira igrata
				}
				else
				{
					document.getElementById("hero2").innerHTML = "Health: " + response + "/150";
					setTimeout(function(){
						document.getElementById("currentTurn").innerHTML = "Right Player's Turn";
						//leviq da ne moje da pipa butonite
					}, 2300);
				}
			});
			$.get(url1,function(response){
				console.log(response);
				document.getElementById("divRightHero").innerHTML = " " + response; // da izchezva sled 3000ms
			});
		}
	});
	

	$(".actions:nth-of-type(1) .rest").click(function(){

		if(isAnimating == false)
		{
			isAnimating = true;
			$(this).fadeOut(1000).delay(2100).fadeIn(1000, function(){
					isAnimating = false;	
				});
			$(".hero:nth-of-type(1) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(1) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(1) img").fadeOut(500).delay(50).fadeIn(500);
			


			if($(this).closest('.hero_0_actions').length)
			{
				var url= "rest.php?attacker=0&defender=1";
			}	
			else
			{
				var url= "rest.php?attacker=1&defender=0";	
			}
			$.get(url,function(response){

				console.log(response);
				
				//document.getElementById("hero1").innerHTML = response;
				document.getElementById("divLeftHero").innerHTML = " +5";
			
			
				if(response != "over")
				{
					document.getElementById("hero1").innerHTML = "Health: " + response + "/130";
				}
				else
				{
					document.getElementById("currentTurn").innerHTML = "RIGHT PLAYER WINS!";	
				}
			});
		}

		setTimeout(function(){
    		document.getElementById("currentTurn").innerHTML = "Right Player's Turn";
  		}, 3500);

	});

	$(".actions:nth-of-type(1) .specialAbility").click(function(){

		if(isAnimating==false)
		{
			isAnimating = true;
			$(this).fadeOut(1000).delay(2000).fadeIn(1000, function(){
				isAnimating = false;	
				});
			$(".hero:nth-of-type(1) img").animate({left: '+=110%', top: '-=10%', width: "+=10%", height: "+=10%"}, options).delay(300);
			$(".hero:nth-of-type(1) img").animate({left: '-=110%', top: '+=10%', width: "-=10%", height: "-=10%"}, options);
		}



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
			
			console.log(response);
			if(parseFloat(response) == -100)
			{
			
				document.getElementById("currentTurn").innerHTML = "LEFT PLAYER WINS!";	
			}
			else
			{
				document.getElementById("hero2").innerHTML = "Health: " + response + "/150";
				setTimeout(function(){
				    document.getElementById("currentTurn").innerHTML = "Right Player's Turn";
				}, 2900);
			}
			//document.getElementById("hero1").innerHTML = response;
			//document.getElementById("hero2").innerHTML = "Health: "+response+"/150";
		
		});
		$.get(url1,function(response){
			
			console.log(response);
			
			//document.getElementById("hero1").innerHTML = response;
			document.getElementById("divRightHero").innerHTML = " " + response;
		});

		/*setTimeout(function(){
    		document.getElementById("currentTurn").innerHTML = "Right Player's Turn";
  		}, 2500);*/

	});
	

	/*************************/
	
	
	$(".actions:nth-of-type(2) .attack").click(function(){

		if(isAnimating==false)
		{
			isAnimating = true;
			$(this).fadeOut(1000).delay(1600).fadeIn(1000, function(){
					isAnimating = false;	
				});
			
			$(".hero:nth-of-type(2) img").animate({left: '-=130%', opacity: '0.5'}, options);
			$(".hero:nth-of-type(2) img").animate({left: '+=130%', opacity: '1'}, options);



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
			
				console.log(response);
				if(parseFloat(response) == -100)
				{
				
					document.getElementById("currentTurn").innerHTML = "RIGHT PLAYER WINS!";	
				}
				else
				{
					document.getElementById("hero1").innerHTML = "Health: " + response + "/150";
					setTimeout(function(){
    					document.getElementById("currentTurn").innerHTML = "Left Player's Turn";
					}, 2500);
				}
			
				//document.getElementById("hero1").innerHTML = response;
				document.getElementById("hero1").innerHTML = "Health: " + response + "/130";
				$.get(url1,function(response){

					console.log(response);
					document.getElementById("divLeftHero").innerHTML = " " + response;
				});
			});
		}
		//setTimeout(function(){
		//    document.getElementById("currentTurn").innerHTML = "Left Player's Turn";
		//}, 2500);
	});
	
	$(".actions:nth-of-type(2) .rest").click(function(){

		if(isAnimating == false)
		{
			isAnimating = true;
			$(this).fadeOut(1000).delay(2100).fadeIn(1000, function(){
				isAnimating = false;	
			});
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
			
			if($(this).closest('.hero_0_actions').length)
			{
				var url= "rest.php?attacker=0&defender=1";
			}	
			else
			{
				var url= "rest.php?attacker=1&defender=0";
			}
			$.get(url,function(response){
				
				console.log(response);
				
				//document.getElementById("hero1").innerHTML = response;
				document.getElementById("hero2").innerHTML = "Health: " + response + "/150";
				document.getElementById("divRightHero").innerHTML =" +5";
			});
		}

		setTimeout(function(){
			document.getElementById("currentTurn").innerHTML = "Left Player's Turn";
		}, 3500);
	});
	
	$(".actions:nth-of-type(2) .specialAbility").click(function(){

 		if(isAnimating==false)
		 {
			isAnimating = true;
			$(this).fadeOut(1000).delay(4800).fadeIn(1000, function(){
				isAnimating = false;	
			});
			$(".hero:nth-of-type(2) img").animate({left: '-=60%', top: '-=30%', width: "toggle", height: "toggle"}, options).delay(700);
			$(".hero:nth-of-type(2) img").animate({left: '+=60%', top: '+=30%', width: "toggle", height: "toggle"}, options);
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
			$(".hero:nth-of-type(2) img").fadeOut(500).delay(50).fadeIn(500);
			
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
				
				console.log(response);
				
				//document.getElementById("hero1").innerHTML = response;
				document.getElementById("hero2").innerHTML = "Health: " + response + "/150";
			
			});
			$.get(url1,function(response){
				
				console.log(response);
				
				//document.getElementById("hero1").innerHTML = response;
				document.getElementById("divRightHero").innerHTML = " +" + response;
			
			});	
		}

		setTimeout(function()
		{
		    document.getElementById("currentTurn").innerHTML = "Left Player's Turn";
		}, 6500); 
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
	
	