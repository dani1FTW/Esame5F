<?php
include_once '../../model/database/config.php';
$id = (isset($_REQUEST['id']) ? (0 + $_REQUEST['id']) : 0);
$q = "
	SELECT *
	FROM immobili
	WHERE IdImmobili ='$id'";
  $query1 = "select * from tipoimmobile ";
  $risu_ca = mysqli_query($con,$query1);
  if(!$risu_ca)
   die("Query non eseguita" . mysqli_error($con)); 
$rs = $con->query($q);
if($rs->num_rows>0)
$immobili = $rs->fetch_assoc();		 
else
	die('Tipo di  immobile selezionato non esiste!!!');	 
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
<form method="GET" action="../../controller/immobili/mod_immobili.php">
<label class ="mb-3" >Descrizione</label>
                    <input type="hidden" class="form-control" name="IdImmobili" size="4"  placeholder="Inserisci L'ID" value="<?= $immobili['IdImmobili'] ?>" required>
                    <input type="text" class="form-control" name="descrizione" size="30"  placeholder="Inserisci la descrizione" value="<?= $immobili['descrizione'] ?>" required>
                    <label class ="mt-3 mb-2" >Vani</label>
                    <input type="number" class="form-control" name="vani" size="4"  placeholder="Inserisci i vani" value="<?= $immobili['vani'] ?>" required>
                    <label class ="mt-3 mb-2" >Superficie</label>
                    <input type="number" class="form-control" name="superficie" size="3"  placeholder="Inserisci la superficie"  value="<?= $immobili['superficie'] ?>" required>
                    <label class ="mt-3 mb-2" >Prezzo</label>
                    <input type="number" class="form-control" name="prezzo" size="10"  placeholder="Inserisci il prezzo" value="<?= $immobili['prezzo'] ?>" required>
                    <label class ="mt-3 mb-2" >C.E</label>
                    <input type="text" class="form-control" name="CE" size="4"  placeholder="Inserisci la classe energetica" value="<?= $immobili['CE'] ?>" required>
                    <label class ="mt-3 mb-2" >Anno</label>
                    <input type="number" class="form-control" name="anno" size="5"  placeholder="Inserisci l'anno" value="<?= $immobili['anno'] ?>" required>
                    <label class ="mt-3 mb-2" >Codice Immobili</label>
									  <select NAME="CodTipoImmobili" class="form-control"> 
	<?php
	 while($riga = mysqli_fetch_array($risu_ca)) {
	  echo '<option value='.$riga['IdTipoImmobile'].'>'.$riga['descrizione'].'</option>';
	}
	?> 
</select>
<label class ="mt-3 mb-2" >Codice Proprietari</label>
                    <input type="number" class="form-control" name="CodProprietari" size="4"  placeholder="Inserisci il codice dei proprietari" value="<?= $immobili['CodProprietari'] ?>" required>  
                    <div class="text-center">
                    <button type="submit" value="modifica" class="btn btn-primary mt-4 text-center " required>Modifica</button>
<div class="dropdown-divider my-3"></div>
<a class="btn btn-danger btn-md " href="lista_immobili.php">Torna Indietro</a>
                      <div class="dropdown-divider "> </div>
                     
                    </div>    
                    </div>
        
              </div>
         </div>
	

</div>
</form>
</div>
</div>
</body>
</html>