<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/nav.css">
	<script src="js/jquery.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
    <script src="js/slideshow.js"></script>

  

    
</head>

<body>
	

    <!-- Navigation -->
    <nav class="navbar  navbar-fixed-top navbar-default" role="navigation" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            
                <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
               
            <?php
                if(!isset($_SESSION['logged_user']))
                {
                    echo "
                    
                        <div class='loginButtons'>
                            <img class='loginButtons' src='img/edit-icon.png' id='sign'>  
    						<img class='loginButtons' src='img/login.png' id='log'>						
    					</div>
                        <a class='navbar-brand navbar-brand-default' href='index.php'>Kygen</a>
                        
                    ";
                }
                else
                {
                    echo "
                
                        <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                            <a class='navbar-brand navbar-brand-default' href='index.php'>Kygen</a>
                            <ul class='nav navbar-nav'>
                                <li>
                                    <a href='game.php'>The Game</a>
                                </li>
                                </ul>
                                    <span id='hello' href='#'>Hello, ".$_SESSION['logged_user']['username_sign']."</span>
                                <div class='loginButtons'>
                                    <a href='php/logout.php'><img class='loginButtons' src='img/logout.png' ></a>
                                    <img class='loginButtons' src='img/profile.png' >
                                </div>
                                
                        </div>

                    ";
                }
            ?>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 
    
    

    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/project_1a.jpg">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
             <img src="img/project_5.jpg">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
            <img src="img/project_4.jpg">
                <div class="carousel-caption">                   
            </div>
            </div>
             <div class="item">
            <img src="img/project_51.jpg">
                <div class="carousel-caption">                   
            </div>
            </div>
             <div class="item">
            <img src="img/project_3.jpg">
                <div class="carousel-caption">                   
            </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    

     
   

    </header>

    <!-- Page Content -->
	<br><br>
    <div class="container">
		<br>
		<h1 class="header1">Kygen</h1>
		<br><br>
        <div class="row">
            <div class="col-lg-12">
				<div class="rowFloat"><img src="img/BPL_1.png"></div>
                <div class="rowFloat rowText"><br><p>Welcome to Football Simulator 16! Pick your favourite team from one of the best Football leagues-Barclays Premier League.</p></div>
            </div>
        </div>
		<br><br>
        <div class="row">
            <div class="col-lg-12">
			<div class="rowFloata" ><img src="img/teams_2.png"></div>
                <div class="rowFloata rowText"><br><p>Chose between few football clubs and simulate the match. The shown results will not dissapoint you!</p></div>
            </div>
        </div>
		<br><br>
        <div class="row">
            <div class="col-lg-12">
				<div class="rowFloat"><img src="img/manager_32.png"></div>
                <div class="rowFloat rowText"><br><p>Try to beat few world class managers and prove yourself on the world scene.</p></div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Мой и на Наско</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <div id="logShow">
        <div class="overlay" id="exitLog">
    </div>
        <div>
            <div class="log">
    
                <form method="post" action="php/login_db.php">
                    <h1>Login</h1>
                    <input type="text" name="username_log" placeholder="Username" required="required" />
                    <input type="password" name="password_log" placeholder="Password" required="required" />
                    <input class="btn btn-danger" type="submit" value="Login now!">
					<p class="toggleRegForm" id="openReg">or <span class="toggleRegister">Register now</span>?</p>
                </form>
            </div>
        </div>
    </div>

    <div id="signShow">
      <div class="overlay" id="exitSign">
        </div>  
        <div>
            <div class="sign">
                <form method="post" action="php/register_db.php">
                    <h1>Sign in</h1>
                    <input type="text" name="username_sign" placeholder="Username" required="required" />
                    <input type="password" name="password_sign" placeholder="Password" required="required" />
                    <input type="password" name="password_2" placeholder="Repeat Password" required="required" />
                    <input type="email" name="email" placeholder="email" required="required" />
                    <input type="text" name="first_name" placeholder="First name" required="required" />
                    <input type="text" name="second_name" placeholder="Last name" required="required" />
                    <select  name="team" >
                    <option value="0" selected>Arsenal</option>
                    <option value="1" >Liverpool</option>
                    <option value="2" >Man City</option>
                    <option value="3" >Chelsea</option>
                </select>
                    <input class="btn btn-danger" type="submit" value="Sign now!">
                </form>
            </div>
        </div>
    </div>
</body>

</html>