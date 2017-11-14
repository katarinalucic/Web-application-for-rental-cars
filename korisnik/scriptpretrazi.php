<link href="CSSPoc.css" rel="stylesheet" type="text/css" />
<link href="tabela.css" rel="stylesheet" type="text/css" />
<?php 
	include "konekcija.php";

	if (empty($_GET['naziv'])){
		echo '<div class="title"><h1>Unesite naziv automobila!</h1</div>';
	} else {
		$naziv = $_GET['naziv'];

		$sql="SELECT auto_naziv, datum_servisa, tip FROM auto WHERE auto_naziv = '$naziv'";
		$q=$mysqli->query($sql);
		$rows= mysqli_num_rows($q);
			?>

<div class="Tabela" >
                <table >
                    <tr>
                        <td>
                            Naziv automobila
                        </td>
                        <td >
                            Datum servisa
                        </td>
                        <td>
                            Tip
                        </td>
                    </tr>
                    <tr>
                        <?php while ($red=$q->fetch_object()) {  ?>
						<tr>
							<td><?php echo $red->auto_naziv; ?></td>
							<td><?php echo $red->datum_servisa; ?></td>
							<td><?php echo $red->tip; ?></td>
						</tr>
						<?php  } ?>
                    </tr>
                   
                </table>
            </div>          
			<?php
		}
	

?>