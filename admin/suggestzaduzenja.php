<?php
if (!isset ($_GET["unos"])){
echo "Parametar Unos nije prosleđen!";
} else {
$pomocna=$_GET["unos"];
include "konekcija.php";
$sql="SELECT auto_id FROM zaduzenje WHERE auto_id LIKE '$pomocna%'";
$rezultat = $mysqli->query($sql);
if ($rezultat->num_rows==0){
echo "Ne postoji zaduženi automobil ciji je id " . $pomocna;
} else {
while($red = $rezultat->fetch_object()){
?>
<a onclick="place(this)"><?php  echo $red->auto_id;?></a>
<br/>
<?php
}
}
$mysqli->close();
}
?>
