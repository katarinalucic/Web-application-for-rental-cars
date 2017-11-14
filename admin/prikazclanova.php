<!DOCTYPE html>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php
include ("bazaAuto.php");
$prikazi=new Database("vk_diplomski");
?>

<html lang="en">

<head>

<title>Požega video klub</title>

<link href="CSSAdmin.css" rel="stylesheet" type="text/css" />
<link href="CSSA.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>



</head>
<body>

<?php
$prikazi->select_clanove();
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
            <li><a href="unosclanarine.php">UNOS UPLATE</a></li>
			</ul>
				
		<li><a href="prikazclanova.php">ČLANOVI</a></li>
			
		
		<li><a href="logout.php">ADMINISTRATOR - IZLOGUJ SE</a></li>
		 </div>
		 </div>
</nav>

<br><br><br><br>
<div class="container text-center" style="overflow-x:auto;">
<div class="left-panel">
      <div class="clear"></div>
    </div>
		<div class="title">
		<h2>PODACI O REGISTROVANIM ČLANOVIMA:</h2>
		</div>
		  <br></br>
<div class="Tabela" >
                <table >
                    <tr>
                        <td>
                            Ime i prezime
                        </td>
                        <td>
                            Korisničko ime
                        </td>
						<td>
                            Lozinka
                        </td>
						<td>
                            Broj telefona
                        </td>
						<td>
                            E-mail adresa
                        </td>
						<td>
                            Clanski broj
                        </td>
                    </tr>
                    <tr>					
                        <?php while ($red=$prikazi->getResult()->fetch_object()) {  ?>
						<tr>
							<td><?php echo $red->ime_prezime; ?></td>
							<td><?php echo $red->korisnicko_ime;?></td>
							<td><?php echo $red->lozinka; ?></td>
							<td><?php echo $red->broj_telefona; ?></td>
							<td><?php echo $red->email_adresa; ?></td>
							<td><?php echo $red->clanski_broj;?></td>
						</tr>
						<?php  } ?>
                    </tr>
                   
                </table>
            </div>          </div>    
</body>










