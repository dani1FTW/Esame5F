<?php
include "../../model/database/config.php";
$id = (isset($_REQUEST['id']) ? (0 + $_REQUEST['id']) : 0);

$q = "
	SELECT *
	FROM dettagliannesso
	WHERE idDettagliAnnesso ='$id'";
$query1 = "select * from immobili ";
 $risu_ca = mysqli_query($con,$query1);

$rs = $con->query($q);
if($rs->num_rows>0)
$dettagliannesso = $rs->fetch_assoc();		 
else
	die('Tipo di  dettaglio annesso selezionato non esiste!!!');	 
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
<title> Modifica Dettaglio Annesso</title>
</head>
<div class="col-7 col-md-6 col-lg-6 col-xl-6 col-xxl-5	 mt-5 mx-auto  ">	
<h1 class="text-center mb-5">Modifica Dettaglio Annesso <?php echo $id ?></h1>
</div>
<div class="form-group">
<div class="col-7 col-md-6 col-lg-6 col-xl-6 col-xxl-4	 mt-5 mx-auto  ">	
<form method="GET" action="../../controller/dettagliannessi/mod_dettannessi.php">
<label class ="mt-3 mb-3" >Codice Tipo di annesso</label>
<input type="hidden"  name="idDettagliAnnesso"   value="<?= $dettagliannesso['idDettagliAnnesso'] ?>"required  /></br>
<input type="number" class="form-control" name="codTipoAnnesso"  value="<?= $dettagliannesso['codTipoAnnesso'] ?>" required /></br>
<label class="mb-3 mt-2">Scegli il codice Immobile:</label>
					              <select NAME="codimmobile" class="form-control"> 
<?php
 while($riga = mysqli_fetch_array($risu_ca,)) {
  echo '<option value='.$riga['IdImmobili'].'>'.$riga['descrizione'].'</option>';
}
?> 
</select>
<div class="text-center">	
<button type="submit" value="modifica" class="btn btn-primary mt-4 text-center " required>Modifica</button>
<div class="dropdown-divider my-3"></div>
<a class="btn btn-danger btn-md " href="lista_dettannessi.php">Torna Indietro</a>
</div>
</form>
</div>
</div>
</body>
</html>