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

<link href="CSSKorisnik1.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script type="text/javascript">

		function pretrazi(){
			var naziv = $('#txt').val();

			$.get('scriptpretrazi.php', {naziv:naziv}, function(data) {
                $('#odgovorpretrage').html(data);
            });
		}

	</script>




<?php require "konekcija.php"; ?>
	<?php 
		
		$sql="SELECT * from auto as a join zaduzenje as z on a.auto_id=z.auto_id where clanski_broj = ".$_SESSION['clanski_broj']."";
		$q=$mysqli->query($sql);
		
		$sql1="SELECT * from uplata where clanski_broj = ".$_SESSION['clanski_broj']."";
		$q1=$mysqli->query($sql1);
		
		$sql2="SELECT * from zaduzenje as z join auto as a on z.auto_id = a.auto_id where clanski_broj = ".$_SESSION['clanski_broj']."";
		$q2=$mysqli->query($sql2);
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
		
		<li><a href="galerija.php">GALERIJA</a></li>
		<li><a href="iznajmljivanjeautomobila.php">IZNAJMLJIVANJE AUTOMOBILA</a></li>
					
		<li><a href="logout.php">KORISNIK - IZLOGUJ SE</a></li>
		 </div>
		 </div>
</nav>

<br><br>
<?php echo "<h2>Dobrodošao/la, ".$_SESSION['ime_prezime']."!</h2>"; ?>

<br><br>
<div id="row">
<div class="container text-center" style="overflow-x:auto;">

<h1><strong>UPUTSTVO ZA IZNAJMLJIVANJE AUTOMOBILA:</strong></h1><br>
<h4>Nakon što online iznajmite automobil, u roku od 24 sata potrebno je da preuzmete automobil u agenciji i uplatite potreban novac. U suprotnom Vaša online rezervacija prestaje da važi.  </h4>
  </div>
</div>

<div class="container text-center" style="overflow-x:auto;">
       <div class="title"> 
		
		<?php while ($red=$q1->fetch_object()) {  
		if($red->datum_do > date("Y-m-d H:i:s"))
		echo "<h4><strong>Vaša uplata traje do: <h8>$red->datum_do, što je takođe rok za vraćanje automobila!</strong></h4>";
	
			else
		echo "<h4>Vaša uplata je <h8>istekla";
          
		    } ?>	
		</div>
			<br></br>
			
			<div class="title">
          <h1>Vaša trenutna zaduženja</h1>
       </div>
<div class="Tabela" >
                <table >
                    <tr>
                        <td>
                            Naziv automobila
                        </td>
                        <td >
                            Datum zaduzenja
                        </td>
						<td >
                            Rok za preuzimanje automobila
                        </td>
                    <tr>					
                        <?php while ($red=$q->fetch_object()) {  
						
						$date1 = $red->datum_zaduzenja;
						$novi_datum1 = strtotime('+1 day', strtotime($date1)); ?>

						<tr>
							<td><?php echo $red->auto_naziv; ?></td>
							<td><?php echo $red->datum_zaduzenja; ?></td>
							<td><?php echo date("Y-m-d",$novi_datum1); ?></td>
						</tr>
						<?php  } ?>
                    </tr>
                   
                </table>
				 
</div></div>
		 
<br><br>

<div class="footer-wrapper">
  <div class="footer" >
  <div class="panel" style="margin-bottom:0px">
        <div class="title">
          <h1><strong>PRETRAGA AUTOMOBILA</strong></h1>
          <h3>Unesite naziv automobila:</h3>
        </div>
        <div class="search">          
				 <ul class="ul1">
					<li class="libg">
					
						<input type="text" id="txt" size="32" onkeyup="sugestija(this.value)" class="search-filed" placeholder="Naziv automobila"> 
						<div id="livesearch"></div>						
							</li>
							<br> <br>
							<li><button type="button" onclick="pretrazi()" class="dugme">Pretraga</button></li>							
				</ul>								
        </div>
		
        <div class="clear"></div>		
    </div>
	<div id="odgovorpretrage"></div>
	
    <div class="clear"></div>
  </div></div>		 
</body>










