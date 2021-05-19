<?php 
	include_once "../../model/database/config.php";	
	$query = "SELECT * FROM Immobili";
	$risu = $con->query($query);
		if($con->errno > 0)
			die("Query non eseguita");
				$risu = $con->query($query) or die ("Query fallita!");
?>
<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<link rel="stylesheet" href="../../src/css/bootstrap.min.css">
	<link rel="icon" href="../../src/img/icon.png ">
	<title> Lista Proprietari</title>
  </head>
	<body>
        <div class="container-fluid">
		<div class="col-12  col-md-10 col-lg-8 col-xl-8 col-xxl-7 mt-5 mx-auto ">	
			<h1 class="text-center mb-5"> Lista Immobili </h1>
			<a href="../../view/immobili/ins_immobile.php"><button type="button"  class="btn btn-outline-secondary mb-5">Aggiungi Immobili</button></a>
			<table class="table table-bordered table-hover ">
			<thead>
				<tr>
					<th scope="col">IdImmobili</th>
					<th scope="col">Descrizione</th>
					<th scope="col">Vani</th>
					<th scope ="col">Superficie </th>
					<th scope ="col"> Prezzo </th>
                    <th scope ="col"> C.E </th>
                    <th scope ="col"> Anno </th>
                    <th scope ="col"> CodTipoImmobili </th>
                    <th scope ="col"> CodProprietari </th>
                    <th scope ="col"> Azioni </th>
                    
				</tr>
			</thead>
				<?php
					if ($risu->num_rows >0){
					while ($riga = $risu -> fetch_assoc()) {
				?>
					</tr>
						<td><?php echo $riga['IdImmobili'];?></td>
						<td><?php echo $riga['descrizione'];?></td>
						<td><?php echo $riga['vani'];?></td>
                        <td><?php echo $riga['superficie'];?></td>
                        <td><?php echo $riga['prezzo'];?></td>
                        <td><?php echo $riga['CE'];?></td>
                        <td><?php echo $riga['anno'];?></td>
                        <td><?php echo $riga['CodTipoImmobili'];?></td>
                        <td><?php echo $riga['CodProprietari'];?></td>
						<td><a class="btn btn-warning btn-sm m-3 " href="../../view/immobili/mod_immobili_form.php?id=<?php echo $riga['IdImmobili'];?>">Modifica</a><a class="btn btn-danger btn-sm " href="../../controller/immobili/canc_immobili.php?id=<?php echo $riga	['IdImmobili']; ?>">Elimina</a></td>
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
						
		</div>
		<div class="text-center">
		<a class="btn btn-danger btn-md mt-3 " href="../../index.php">Torna al menu principale</a>
                </div>
				</div>
	</body>
</html>