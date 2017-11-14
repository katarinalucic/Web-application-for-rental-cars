<!DOCTYPE html>

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

			if (empty($_POST['naziv'])||empty($_POST['datum'])||empty($_POST['tipa'])) {
				$poruka = '<div class="title"><h4>Sva polja su obavezna!</h4</div>';
			} else {

				$podaci=array($_POST["naziv"], $_POST["datum"], $_POST["tipa"]);
				if($dodaj->insert_auto("auto", "auto_naziv, datum_servisa, tip", $podaci))
				 {
					$poruka = '<div class="title"><h3>Automobil je uspesno dodat!</h3</div>';
				} else {
					$poruka = '<div class="title"><h4>Greska!</h4></div>';
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
			<li><a href="obrisiauto.php">OBRIŠI AUTOMOBIL</a></li>
			<li><a href="razduzivanje.php">RAZDUŽI AUTOMOBIL</a></li></ul>
			
			
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">UPLATA<span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="unosuplate.php">UNOS UPLATE</a></li></ul>
				
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
				<form action="dodajauto.php" method="POST">
					<div class="search1">
					    <label><h3>Naziv automobila:</h3></label>
					   <ul class="ul1">
					   <li class="libg">
					   <input name="naziv" type="text" class="unos"></li>
					   </ul>
				  	</div>
					<br>
					<div class="search1">
					    <label><h3>Datum servisa:</h3></label>
					   <ul class="ul1">
					   <li class="libg">
					   <input name="datum" style="width:40%" type="date" class="unos"></li>
					   </ul>
				  	</div>
					<br>
					<div class="search1">
					    <label><h3>Tip:</h3></label><br>
					   <input type="text" name="tipa" class="unos" list="exampleList">
						<datalist id="exampleList">
						<option value="Limuzina">
						<option value="Karavan">
						</datalist>
				  	</div>
					
					<br>
					<div class="search">
					   <ul class="ul1">
					<li>
			  		<button type="submit" name="submit" class="dugme">Dodaj</button></li>
					
					<?php if(!empty($poruka)) echo $poruka; ?>
					   </ul>
				  	</div>
					<br>
			  	</form>
			</div>

</div>


















