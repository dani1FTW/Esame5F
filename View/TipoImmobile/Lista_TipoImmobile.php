<?php 
	include_once "../../model/database/config.php";	
	$query = "SELECT * FROM `tipoimmobile` ORDER BY `tipoimmobile`.`IdTipoImmobile` ASC	";
		//la query viene eseguita
	$risu = $con->query($query);
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
		<link href="../src/icons/bootstrap-icons.css" rel="stylesheet">
		<link rel="icon" href="../../src/img/icon.png ">
		 <title> Lista Tipi di immobili</title>
  	</head>
	<body >
	<div class="container-fluid">
		<!-- Per rendere la pagina responsive !-->
		<div class="col-12  col-md-7 col-lg-5 col-xl-4 col-xxl-6 mt-5 mx-auto ">	
			<h1 class="text-center mb-5"> Lista tipi di immobili </h1>
			<a href="inser_tipoimmobile.html"><button type="button"  class="btn btn-outline-secondary mb-5">Aggiungi Tipo Immobile</button></a>
			<table class="table table-bordered table-hover">			
			<thead>
				<tr>
					<th scope="col">IdTipoImmobile </th>
					<th scope="col">Descrizione</th>
					<th scope ="col"> Azioni </th>
				</tr>
			</thead>
			<?php
				if ($risu->num_rows >0){
					while ($riga = $risu -> fetch_assoc()) {
			?>
					</tr>
					<td><?php echo $riga['IdTipoImmobile'];?></td>
					<td><?php echo $riga['descrizione'];?></td>
					<td><a class="btn btn-warning btn-sm m-3 " href="mod_tipoimmobile_form.php?id=<?php echo $riga['IdTipoImmobile'];?>">Modifica</a><a class="btn btn-danger btn-sm " href="../../controller/tipoimmobile/canc_tipoimmobile.php?id=<?php echo $riga	['IdTipoImmobile']; ?>">Elimina</a></td>
					
					</tr>
					<?php
						}
						}
					?>
						<?php
							echo "
							</table><br/>
							NUMERO IMMOBILI = {$risu->num_rows}"
						?>
			    <form class="form-inline my-2 my-lg-0">
				</button>
				<div class="text-center">
					<a class="btn btn-danger btn-md mt-3 " href="../../index.php">Torna al menu principale</a>
					</div>
		</div>
		
					</div>
	</body>
</html>