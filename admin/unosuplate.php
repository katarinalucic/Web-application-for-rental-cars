<!DOCTYPE html>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php
include ("bazaAuto.php");
$dodaj=new Database("vk_diplomski");
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

	<?php 			 
		if (isset($_POST['submit'])){

			if (empty($_POST['datumod'])||empty($_POST['datumdo'])||empty($_POST['clanskibroj'])) {
				$poruka = '<div class="title"><h4>Sva polja su obavezna!</h4</div>';
			} else {

				$podaci=array($_POST["datumod"], $_POST["datumdo"], $_POST["clanskibroj"]);
				if($dodaj->insert_uplata("uplata", "datum_od, datum_do, clanski_broj", $podaci))
				 {
					$poruka = '<div class="title"><h4>Uplata je uspesno uneta!</h4</div>';
				} else {
					$poruka = '<div class="title"><h4>Greska!</h4</div>';
				}
			}
		}
	?>

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
			<li><a href="obrisiauto.php">OBRIŠI OUTOMOBIL</a></li>
			<li><a href="razduzivanje.php">RAZDUŽI AUTOMOBIL</a></li></ul>
			
			
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

<br><br><br><br>
<div class="content_wrap1 text-center">
<div class="left-panel">
      <div class="clear"></div>
    </div>
		<div class="title">
		<h1>Unesite sve tražene podatke</h1>
		</div>
				
				<form action="unosuplate.php" method="POST">
					<div class="search">
					    <label><h4>Datum od:</h4></label>
					   <ul class="ul1">
					   <li class="libg">
					   <input name="datumod" type="date" class="search-filed"></li>
					   </ul>
				  	</div>
					<br>
					<div class="search">
					    <label><h4>Datum do:</h4></label>
					   <ul class="ul1">
					   <li class="libg">
					   <input name="datumdo" type="date" class="search-filed"></li>
					   </ul>
				  	</div>
					<br>
					<div class="search">
					    <label><h4>Članski broj:</h4></label>
					   <ul class="ul1">
					   <li class="libg">
					   <input name="clanskibroj" type="text" class="search-filed" placeholder="Članski broj..."></li>
					   </ul>
					   </div>
					   <br>
					
					<div class="search">
					<ul class="ul1">
					<li>
					
			  		<button type="submit" name="submit" class="dugme">UNESI UPLATU</button></li>
					
					
					   </ul>
					   <?php if(!empty($poruka)) echo $poruka; ?>
				  	</div>
					
					<br>
			  	</form>		
		 
</body>










