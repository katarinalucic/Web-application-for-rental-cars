<?php
	session_start();
	if($_SESSION['vrsta_korisnika']==1){
	require('..\header.html');
	require('pocetna.php');
?>
<html><body><div class="sadrzaj"></div></body></html>
<?php
	require('..\footer.html');
	}
?>