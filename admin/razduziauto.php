<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
include ("bazaAuto.php");
$izbrisi=new Database("vk_diplomski");
$izmena=new Database("vk_diplomski");
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
<script src="sugerisizaduzenja.js" type="text/javascript"></script> 
<script type="text/javascript">
function place(ele){
    document.getElementById('txt').value = ele.innerHTML;
	document.getElementById("livesearch").style.display = "none";
}
</script>

	<?php 				
	  		
		if (isset($_POST['submit'])){			
				$podaci=array($_POST["auto_id"]);
				if ($izbrisi->delete_zaduzenje("zaduzenje",$podaci)) 
					 {
					$poruka = '<div class="title"><h1>Auto je uspesno razduzen!</h1</div>';
				} else {
					$poruka = '<div class="title"><h1>Greska!</h1</div>';
				}			
		}
		
		if (isset($_POST['submit']))
			if (empty($_POST['auto_id'])) {
				$poruka = '<div class="title"><h3>Morate uneti ID automobila!</h3></div>';
			} else {
							
				$podaci=array($_POST["auto_id"]);
				if ($izmena->update_auto("auto",$podaci)) 
					 {
					$poruka = '<div class="title"><h1>Greska!</h1</div>';
				} else {
					$poruka = '<div class="title"><h1>Auto je uspesno razduzen!</h1</div>';
				}			
			
		}
	 ?>
	 
	 
</head>
<body>
<?php
$prikazi->select_autom();
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
            <li><a href="unosuplate.php">UNOS UPLATE</a></li>
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
		<h2>ZADUZENI AUTOMOBILI:</h2>
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
		<h2>Izaberite automobil koji zelite da razduzite:</h2>
		<form action="razduziauto.php" method="POST">
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
			  		<button type="submit" name="submit" class="dugme">RAZDUŽI</button></li>
					<?php if(!empty($poruka)) echo $poruka; ?>
					   </ul>
				  	</div>
					<br>
			  	</form>

	 
	 
	 
	 
	 
	 
	 
	 