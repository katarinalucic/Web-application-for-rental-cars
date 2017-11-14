<!DOCTYPE html>
<html lang="en">

<head>

<title>Požega video klub</title>

<link href="CSS.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script language="javascript">
			function proveri()
			{
				var lozinkat= /.{6,}/;
				var imeprezimet=/[a-z]{3,}/i;
				var mejlt=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				var ime_prezime = document.formarega.rimeprezime.value;
				var lozinka = document.formarega.rlozinka.value;
				var provera = document.formarega.rplozinka.value;
				var korime = document.formarega.rkime.value;
				var mejl = document.formarega.rmail.value;
				var isti=provera.match(lozinka);
				var r1=imeprezime.match(imeprezimett),r2=lozinka.match(lozinkat),r3=mejl.match(mejlt),r4=korime.match(imet);
				var rezultat = r1 && r2 && r3 && r4 isti;
				if (rezultat != null)
					return true;
				else 
					if(!r1)document.formarega.rimeprezime.focus();
					if(!r2)document.formarega.rlozinka.focus();
					if(!r3)document.formarega.rmejl.focus();
					if(!r4)document.formarega.rkime.focus();
					if(!isti)document.formarega.rplozinka.focus();
					if(!vrsta)document.formarega.vrstakorisnika.focus();
					return false;
			}
		</script>



</head>
<body>

<?php
$url = 'http://api.worldweatheronline.com/free/v1/weather.ashx?q=Pozega,Serbia&format=json&num_of_days=2&key=wbdsf3an2chbbf7dx73bj6b6';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, false);
$curl_recieved = curl_exec($curl);
curl_close($curl);
$parsed_json = json_decode ($curl_recieved);
$temperature = $parsed_json->data->current_condition[0]->temp_C;
?>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid"> 
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>  
    <div class="navbar-header">
     <a class="navbar-brand navvideo" href="pocetna.php"><strong>VIDEO KLUB</strong></a>
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
			
			<h2>SVA POLJA SU OBAVEZNA</h2><br>
			
			<form name="formarega" method="post" action="<?php echo $_SERVER['PHP_SELF']?>" onsubmit="return proveri()">
			
			
			<div class="registracija">
				
					<input class="unos" type="text" name="rimeprezime" placeholder="Unesite ime i prezime"><br>
					
					<input class="unos" type="text" name="rkime" placeholder="Unesite korisničko ime"><br>
									
					<input class="unos" type="password" name="rlozinka" placeholder="Unesite lozinku"><br>
					
					<input class="unos" type="password" name="rplozinka" placeholder="Unesite ponovo lozinku"><br>
					
					<input class="unos" type="text" name="rbrtelefona" placeholder="Unesite broj telefona"><br>
					
					<input class="unos" type="text" name="rmail" placeholder="Unesite mail adresu"><br>					
										
					<input class="unos" type="text" name="rclbroj" placeholder="Unesite članski broj"><br>

					<br>
				
							
				<button class="dugme" type="submit">Registracija</button>
				
			</div>
					
				
				
				<?php
					if (isset($_COOKIE["porukalog"]))
						echo $_COOKIE["porukalog"];
					else
						echo " ";
				?>
			</form>

			
			<?php
			error_reporting(E_ALL ^ E_DEPRECATED);
				if(array_key_exists('registracija', $_POST)){
					$lozinka = $_POST['rlozinka'];
					$provera = $_POST['rplozinka'];
					$ime_prezime = $_POST['rimeprezime'];
					$username = $_POST['rkime'];
					$clanskibroj = $_POST['rclbroj'];
					$kontakt = $_POST['rbrtelefona'];
					$mejl = $_POST['rmail'];
				
					$svepotrebno = $ime_prezime!="" && $username!="" && $lozinka!="" && $provera!="" && $clanskibroj!="" && $mejl!="" && $kontakt!="" ;
					
					if($svepotrebno){
					
					mysql_connect("localhost","root","");
					mysql_select_db("vk_diplomski");
				
					$rez=mysql_query("SELECT * FROM korisnik WHERE korisnicko_ime='$username'");
					$niz=mysql_fetch_array($rez);					
					
						if(!$niz){
							
							if($lozinka==$provera){
				
							mysql_connect("localhost", "root", "")or die ("Greska sa bazom".mysql_error());
							mysql_select_db("vk_diplomski");
							$uspeh = mysql_query("INSERT INTO korisnik (ID,ime_prezime, korisnicko_ime, lozinka, broj_telefona, e-mail_adresa, clanski_broj, vrsta_korisnika, status)".
							"VALUES (NULL,'$_POST[rimeprezime]','$_POST[rkime]','$_POST[rlozinka]','$_POST[rbrtelefona]','$_POST[rmail]','$_POST[rclbroj]',2,'clan')");
							if ($uspeh) echo "<p>Uspešno ste se registrovali.</p>";
						}
						else echo "<p>Lozinke nisu iste!</p>";
					}
					else echo "<p>Korisničko ime je zauzeto!</p>";
					} 
					else echo "<p>Morate popuniti sva polja!</p>";
				}
			?>
			

			
</div>			
</div>
		 		 
</body>










