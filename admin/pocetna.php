<!DOCTYPE html>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>


<html lang="en">

<head>

<title>Union rent a car</title>

<link href="CSSAdmin.css" rel="stylesheet" type="text/css" />
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
		
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">AUTOMOBILI<span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="dodajauto.php">DODAJ AUTOMOBIL</a></li>
			<li><a href="obrisiauto.php">OBRIŠI AUTOMOBIL</a></li>
			<li><a href="razduziauto.php">RAZDUŽI AUTOMOBIL</a></li></ul>
			
			
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">UPLATA<span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="unosuplate.php">UNOS UPLATE</a></li>
			</ul>
				
		<li><a href="prikazclanova.php">ČLANOVI</a></li>
			
		
		<li><a href="logout.php">ADMINISTRATOR - IZLOGUJ SE</a></li>
		 </div>
		 </div>
</nav>

<br><br><br>
<?php echo "<h2>Dobrodošao/la, ".$_SESSION['ime_prezime']."!</h2>"; ?>


<br><br>
<div id="row">
<div class="container text-center" style="overflow-x:auto;">

<h1><strong>DOBRODOSLI NA ADMINISTRATORSKI DEO:</strong></h1><br>
			<h3>na meniju se nalaze kartice za rad sa clanovima, automobilima i clanarinama<h3>

  </div>
</div>
</div>
		 
		 
</body>










