<?php 
//file che permette di collegarsi al database
include "../../model/database/config.php";
 
			//query per farci vedere i valori	
			$query = "SELECT * FROM `dettagliannesso` ";
			//la query viene eseguita
			$risu = $con->query($query);
			//per controllare se ci sono errori
					if($con->errno > 0)
					die("Query non eseguita");
			$risu = $con->query($query) or die ("Query fallita!");
?>
<!--  Parte Boostrap  -->
<!doctype html>
<html lang="it">
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- per inserire le icone  !-->
		<link href="icons/bootstrap-icons.css" rel="stylesheet">
		<!-- per inserire le immagini  !-->
		<link rel="icon" href="../../src/img/icon.png ">
		<!-- libreria predefinita di bootstrap  !-->
		<link rel="stylesheet" href="../../src/css/bootstrap.min.css">
		<title> Lista dettagli annessi</title>
  	</head>
	<body>
	
		<div class="container">
			<!-- per rendere la pagina responsive   !-->
			<div class="col-12  col-md-12 col-lg-10 col-xl-9 col-xxl-7 mt-5 mx-auto ">	
			<h1 class="text-center mb-5"> Lista dettagli annessi </h1>
			<a href="ins_dettannesso.php"><button type="button"  class="btn btn-outline-secondary mb-5">Aggiungi Dettaglio Annessi</button></a>
			<!-- creo la tabella  !-->
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th scope="col">IdDettagliAnnessi </th>
						<th scope="col">Codice Annesso</th>
						<th scope ="col">Codice Immobile</th>
						<th scope ="col">Azioni </th>
					</tr>
				</thead>				
					<?php
						if ($risu->num_rows >0){
						while ($riga = $risu -> fetch_assoc()) {
					?>
					</tr>
					<!-- qui si inseriscono tutti i valori del database  !-->
					<td><?php echo $riga['idDettagliAnnesso'];?></td>
					<td><?php echo $riga['codTipoAnnesso'];?></td>
					<td><?php echo $riga['codimmobile'];?></td>
					<!-- Riga per modificare un valore  !-->
					<td><a class="btn btn-warning btn-sm-3 m-3" href="../../view/dettagliannessi/mod_dettannessi_form.php?id=<?php echo $riga['idDettagliAnnesso'];?>">Modifica</a><a class="btn btn-danger btn-sm-3" href="../../controller/dettagliannessi/canc_dettannessi.php?id=<?php echo $riga	['idDettagliAnnesso']; ?>">Cancella</a>
					<!-- Riga per cancellare un valore !-->
					</tr>
					<?php
						}
						}
					?>
					
					<?php
					 //Ci mostra il numero di campi in una tabella
						echo "
						</table><br/>
						NUMERO TIPI DI ANNESSI = {$risu->num_rows}"

					?>
			</table>
			<div class="text-center">
		<a class="btn btn-danger btn-md mt-3 " href="../../index.php">Torna al menu principale</a>
                </div>
		</div>	
		</div>
	</body>
</html>