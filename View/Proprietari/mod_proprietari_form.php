<?php
include_once '../../model/database/config.php';
$id = (isset($_REQUEST['id']) ? (0 + $_REQUEST['id']) : 0);
$q = "
	SELECT *
	FROM proprietari
	WHERE IdProprietari='$id'";
$rs = $con->query($q);
if($rs->num_rows > 0)
$proprietari = $rs->fetch_assoc();		 
else
	die('Proprietario selezionato non esiste!!!');	 
$rs->free();
$con->close();
?>
<!doctype html>
<html lang="it">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<link rel="stylesheet" href="../../src/css/bootstrap.min.css">
<link rel="icon" href="../../src/img/icon.png" >
<title> Modifica Proprietari</title>
</head>
<div class="col-7 col-md-6 col-lg-6 col-xl-6 col-xxl-5	 mt-5 mx-auto  ">	
<h1 class="text-center mb-5">Modifica Proprietario <?php echo $id ?></h1>
</div>
<div class="form-group">
<div class="col-7 col-md-6 col-lg-6 col-xl-6 col-xxl-4	 mt-5 mx-auto  ">	
<form method="GET" action="../../controller/proprietari/mod_proprietari.php">
<input type="hidden"  name="IdTipoImmobile"   value="<?= $proprietari['IdProprietari'] ?>" required  /></br>
<label class ="mt-3 mb-3" >Nome</label>
<input type="text" class="form-control" name="Nome"  value="<?= $proprietari['Nome'] ?>" required /></br>
<label class ="mt-3 mb-3" >Cognome</label>
<input type="text" class="form-control" name="Cognome"  value="<?= $proprietari['Cognome'] ?>" required /></br>
<div class="text-center">
<button type="submit" value="modifica" class="btn btn-primary mt-4 text-center " required>Modifica</button>
<div class="dropdown-divider my-3"></div>
<a class="btn btn-danger btn-md " href="lista_proprietari.php">Torna Indietro</a>
</div>
</form>
</div>
</div>
</body>
</html>