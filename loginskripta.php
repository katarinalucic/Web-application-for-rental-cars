<?php require('header.html');?>

<html>
	
	<body>
		<div class="middle">
 <?php
 error_reporting(E_ALL ^ E_DEPRECATED);
	mysql_connect("localhost", "root", "")or die ("Greska sa bazom".mysql_error());
	mysql_select_db("vk_diplomski");
	session_start();
	$ime = mysql_real_escape_string($_POST['kime']);
	$sifra = mysql_real_escape_string($_POST['lozinka']);
	$rezultat = mysql_query("SELECT * FROM korisnik WHERE korisnicko_ime ='$ime' AND lozinka='$sifra'");
	
	if ($niz = mysql_fetch_array($rezultat)) { 
		
		session_start();
		$_SESSION['ime_prezime']=$niz['ime_prezime'];
		$_SESSION['korisnicko_ime']=$niz['korisnicko_ime'];
		$_SESSION['clanski_broj']=$niz['clanski_broj'];
		$_SESSION['vrsta_korisnika']=$niz['vrsta_korisnika'];
		$_SESSION['poruka']="";
		
		if($_SESSION['vrsta_korisnika']==1) header("Location: admin/admin.php");
		if($_SESSION['vrsta_korisnika']==2) header("Location: korisnik/pocetna.php");
		
		
	} else {
		setcookie("porukalog","<center>Neispravno uneto korisničko ime/lozinka.</center>");
		header('Location: proba.php');
	}
 ?>	
		</div>
	</body>
</html>
<?php require('footer.html');?>