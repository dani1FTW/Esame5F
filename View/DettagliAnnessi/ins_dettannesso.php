
<!-- Parte Bootstrap  -->
<!doctype html>
<html lang="it">
  <head>
    <!--  Per inserire le immagini  -->
    <link rel="icon" href="../../src/img/icon.png" ">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Libreria di Bootstrap   -->
    <link rel="stylesheet" href="../../src/css/bootstrap.min.css">
    <title> Inserimento Annesso</title>
  </head>
  <?php
 include "../../model/database/config.php";
 $query1 = "select * from immobili ";
 $risu_ca = mysqli_query($con,$query1);
 
 if(!$risu_ca)
	die("Query non eseguita" . mysqli_error($con)); 
?>
    <body>
      <!-- Container per centrare il contenuto    -->
      <div class="container">
        <!--  Per rendere la pagina Responsive  -->
          <div class="col-6  col-md-4 col-lg-5 col-xl-4 col-xxl-5	 mt-5 mx-auto  ">
              <h1 class="text-center mb-5"> Inserimento Annesso </h1>
              <div class="form-group">
                <form name="modulo"  method="get" action="../../controller/dettagliannessi/ins_dettannessi.php" >
                <label class ="mb-3" >Codice Annesso</label>
                <input type="number" class="form-control" name="codTipoAnnesso" size="4"  placeholder="Inserisci il codice annesso" required>
				<label class ="mb-3 mt-4" >Codice Immobile</label>
        <select NAME="codimmobile" class="form-control"> 
	<?php
	 while($riga = mysqli_fetch_array($risu_ca)) {
	  echo '<option value='.$riga['IdImmobili'].'>'.$riga['descrizione'].'</option>';
	}
	?> 
</select>
            </div>
            
            <div class="text-center">
              <button type="submit" value="invia" class="btn btn-primary mt-3 text-center " required>Invia</button>
              <div class="dropdown-divider "> </div>
              <a class="btn btn-warning btn-md mt-3 mx-4" href="lista_dettannessi.php">Torna Alla lista</a>
               <a class="btn btn-danger btn-md mt-3 " href="../../index.php">Torna al menù principale</a>
            </div>
            </form>
          </div>
       </div>
    </body>
    <!--  Librerie di Bootstrap per l'inserimento di Pop-up e altre varie cose di JavaScript  -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</html>
