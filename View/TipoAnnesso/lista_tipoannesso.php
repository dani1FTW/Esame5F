<?php 
	include_once "../../model/database/config.php";	
	//query che seleziona tutti i campi da tipoannesso per farli vedere nella tabella
	$query = "SELECT * FROM `tipoannesso` ";
	//la query viene eseguita
	$risu = $con->query($query);
	//Per controllare se ci sono errori
	if($con->errno > 0)
	die("Query non eseguita");
	$risu = $con->query($query) or die ("Query fallita!");
?>
<!-- Parte Bootstrap !-->
<!doctype html>
<html lang="it">
	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	    <link rel="stylesheet" href="../../src/css/bootstrap.min.css">
		<!-- Per vedere le icone   !-->
		<link href="icons/bootstrap-icons.css" rel="stylesheet">
		<!-- Per vedere le immagini !-->
		<link rel="icon" href="../../src/img/icon.png ">
		<title> Lista Annessi</title>
  	</head>
  	<body>
		  <!-- Per rendere la pagina responsive !-->
  		<div class="col-8  col-sm- col-md-3 col-lg-5 col-xl-4 col-xxl-6 mt-5 mx-auto ">	
			<h1 class="text-center mbm"> Lista Annessi </h1>
			<a href="inser_tipoannesso.html"><button type="button"  class="btn btn-outline-secondary mb-5">Aggiungi Il Tipo Di Annesso</button></a>
			<table class="table table-bordered table-hover">
  		<thead>
    		<tr>
      			<th scope="col">IdAnnesso </th>
      			<th scope="col">Descrizione</th>
	 			<th scope ="col"> </th>
      		</tr>
		</thead>
		<?php
			if ($risu->num_rows >0){
			while ($riga = $risu -> fetch_assoc()) {
		?>
			</tr>
				<td><?php echo $riga['idTipoAnnesso'];?></td>
				<td><?php echo $riga['Descrizione'];?></td>
				<td><a class="btn btn-warning btn-sm-3 m-3" href="../../view/tipoannesso/mod_tipoannesso_form.php?id=<?php echo $riga['idTipoAnnesso'];?>">Modifica</a><a class="btn btn-danger btn-sm-3" href="../../controller/tipoannesso/canc_tipoannesso.php?id=<?php echo $riga	['idTipoAnnesso']; ?>">Cancella</a>
			</tr>
			<!-- Parte in PHP per chiuedere le parentesi grasse !-->
				<?php
					}
					}
				?>

				<!-- Per vedere il numero di annessi presenti  !-->
  					<?php
 					 echo "
					</table><br/>
					NUMERO ANNESSI = {$risu->num_rows}"
					?>
	<div class="text-center">
		<a class="btn btn-danger btn-md mt-3 " href="../../index.php">Torna al menu principale</a>
                </div>
	</body>
</html>