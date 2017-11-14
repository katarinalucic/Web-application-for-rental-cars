<!DOCTYPE html>
<html lang="en">

<head>

<title>Union rent a car</title>

<link href="CSSPoc.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid"> 
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>  
    <div class="navbar-header">
     <a class="navbar-brand navvideo" href="pocetna.php"><strong>UNION RENT A CAR</strong></a>
    </div>    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">ULOGUJ SE</a></li>
        <li><a href="registracija.php">REGISTRACIJA</a></li>
        </ul>
		 </div>
		 </div>
</nav>

<br>
<br>
<div id="row">
<div class="container text-center" style="overflow-x:auto;">
 


			<div class="imgcontainer">
			<img src="Slike/avatar.png" alt="Avatar" class="avatar">
			</div>
			
			<form name="formalog" method="post" action="loginskripta.php">
			<?php setcookie("porukalog","",time()-3600); ?>
			
			<div class="prijava">
				
					<input class="unos" type="text" name="kime" placeholder="Unesite korisničko ime"><br>
					
				
					<input class="unos" type="password" name="lozinka" placeholder="Unesite lozinku"><br><br>
				
							
				<button class="dugme" type="submit">Uloguj se</button>
				
			</div>
					
				
				
				<?php
					if (isset($_COOKIE["porukalog"]))
						echo $_COOKIE["porukalog"];
					else
						echo " ";
				?>
			</form>  
</div>			
</div>
		 		 
</body>










