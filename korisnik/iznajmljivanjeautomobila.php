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
$izmena=new Database("vk_diplomski");
$prikazi=new Database("vk_diplomski");
?>

<html lang="en">

<head>

<title>Union rent a car</title>

<link href="CSSKorisnik1.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<?php 				

	  		
			if (isset($_POST['submit'])){
				
				$podaci=array(date("Y/m/d"), $_SESSION['clanski_broj'], $_POST["auto_id"]);
				if($dodaj->insert_zaduzenje("zaduzenje", "datum_zaduzenja, clanski_broj, auto_id", $podaci))
				 {
					$poruka = '<div class="title"></div>';
				} else {
					$poruka = '<div class="title"><h4>Greska!</h4</div>';
				}
		}
		if (isset($_POST['submit']))
				if (empty($_POST['auto_id'])) {
				$poruka = '<div class="title"><h3>Morate uneti ID automobila!</h3></div>';
			} else {
				$podaci=array($_POST["auto_id"]);
				if ($izmena->update_auto("auto",$podaci)) 
					 {
					$poruka = '<div class="title"><h4>Greska!</h4</div>';
				} else {
					$poruka = '<div class="title"><h4>Automobil je uspesno iznajmljen!</h4</div>';
				}			
			
		}
	 ?>




</head>
<body>
<?php
$prikazi->select_auto();
?>

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
		
		<li><a href="galerija.php">GALERIJA</a></li>
		<li><a href="iznajmljivanjeautomobila.php">IZNAJMLJIVANJE AUTOMOBILA</a></li>
					
		<li><a href="logout.php">KORISNIK - IZLOGUJ SE</a></li>
		 </div>
		 </div>
</nav>

<br><br><br><br>
<div class="container text-center" style="overflow-x:auto;">
<div class="left-panel">
      <div class="clear"></div>
    </div>
		<div class="title">
		<h2>RASPOLOZIVI AUTOMOBILI:</h2>
		</div>
		  <br></br>
<div class="Tabela" >
                <table >
                    <tr>
						<td>
                            ID automobila
                        </td>
                        <td>
                            Naziv
                        </td>
                        <td>
                            Datum servisa
                        </td>
						<td>
                            Tip
                        </td>
                    </tr>
                    <tr>					
                        <?php while ($red=$prikazi->getResult()->fetch_object()) {  ?>
						<tr>
							<td><?php echo $red->auto_id; ?></td>
							<td><?php echo $red->auto_naziv; ?></td>
							<td><?php echo $red->datum_servisa;?></td>
							<td><?php echo $red->tip; ?></td>
						</tr>
						<?php  } ?>
                    </tr>
                   
                </table>
            </div>    
		</div>
		
<br><br>

<div class="container text-center" style="overflow-x:auto;">
<div class="title">
		<h2>Izaberite automobil koji zelite da iznajmite:</h2>
		<form action="iznajmljivanjeautomobila.php" method="POST">
					<div class="search">
					   <ul class="ul1">
					   <li class="libg">
					   <input name="auto_id" type="text" class="search-filed" placeholder="ID"></li>
					   </ul>
				  	</div>
					<br>
					<div class="search">
					   <ul class="ul1">
					<li>
			  		<button type="submit" name="submit" class="dugme">IZNAJMI</button></li>
					<?php if(!empty($poruka)) echo $poruka; ?>
					   </ul>
				  	</div>
					<br>
			  	</form>
