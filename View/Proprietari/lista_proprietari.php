<?php 
	include_once "../../model/database/config.php";	
	$query = "SELECT * FROM Proprietari";
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
		<div class="col-12  col-md-10 col-lg-8 col-xl-8 col-xxl-6 mt-5 mx-auto ">	
			<h1 class="text-center mb-5"> Lista Proprietari </h1>
			<a href="inser_proprietari.html"><button type="button"  class="btn btn-outline-secondary mb-5">Aggiungi Proprietari</button></a>
			<table class="table table-bordered table-hover ">
			<thead>
				<tr>
					<th scope="col">IdProprietari</th>
					<th scope="col">Nome</th>
					<th scope="col">Cognome</th>
					<th scope ="col">Azioni </th>

				</tr>
			</thead>
				<?php
					if ($risu->num_rows >0){
					while ($riga = $risu -> fetch_assoc()) {
				?>
					</tr>
						<td><?php echo $riga['IdProprietari'];?></td>
						<td><?php echo $riga['Nome'];?></td>
						<td><?php echo $riga['Cognome'];?></td>
						<td><a class="btn btn-warning btn-sm m-3 " href="../../view/proprietari/mod_proprietari_form.php?id=<?php echo $riga['IdProprietari'];?>">Modifica</a><a class="btn btn-danger btn-sm " href="../../controller/proprietari/canc_proprietari.php?id=<?php echo $riga	['IdProprietari']; ?>">Elimina</a></td>
					</tr>
					<?php
					}
					}
					?>
		
    					<?php
						echo "
							</table><br/>
							NUMERO DI PROPRIETARI = {$risu->num_rows}"
						?>
						<div class="text-center">
		<a class="btn btn-danger btn-md mt-3 " href="../../index.php">Torna al menu principale</a>
                </div>
		</div>
	</body>
</html>