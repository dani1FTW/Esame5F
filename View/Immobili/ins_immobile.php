

<!doctype html>
<html lang="it">

  <head>
      <link rel="stylesheet" type="text/css" href="./menu.php" />
	    <link rel="icon" href="../../	src/img/icon.png">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	    <link rel="stylesheet" href="../../src/css/bootstrap.min.css">
      <title> Inserimento Immobili</title>
  </head>
  <?php
 
 include_once "../../model/database/config.php";
 $query1 = "select * from tipoimmobile ";
 $risu_ca = mysqli_query($con,$query1);
 
 if(!$risu_ca)
	die("Query non eseguita" . mysqli_error($con)); 
?>
    <body >
        <div class="container">
          <div class="col-7 col-md-6 col-lg-6 col-xl-6 col-xxl-7	 mt-5 mx-auto  ">	
            <h1 class="text-center mb-5"> Inserimento Immobili </h1>
              </div>
               
              <div class="col-6  col-md-6 col-lg-5  col-xl-4 col-xxl-4	 mt-5 mx-auto  ">	
                <div class="rows">
                    <form name="modulo"  method="get" action="../../controller/immobili/inser_immobili.php" >
                    <label class ="mb-3" >Descrizione</label>
                    <input type="text" class="form-control" name="descrizione" size="30"  placeholder="Inserisci la descrizione" required>
                    <label class ="mt-3 mb-2" >Vani</label>
                    <input type="number" class="form-control" name="vani" size="4"  placeholder="Inserisci i vani" required>
                    <label class ="mt-3 mb-2" >Superficie</label>
                    <input type="number" class="form-control" name="superficie" size="3"  placeholder="Inserisci la superficie" required>
                    <label class ="mt-3 mb-2" >Prezzo</label>
                    <input type="number" class="form-control" name="prezzo" size="10"  placeholder="Inserisci il prezzo" required>
                    <label class ="mt-3 mb-2" >C.E</label>
                    <input type="text" class="form-control" name="CE" size="4"  placeholder="Inserisci la classe energetica" required>
                    <label class ="mt-3 mb-2" >Anno</label>
                    <input type="number" class="form-control" name="anno" size="5"  placeholder="Inserisci l'anno" required>
					<label class="mb-3 mt-2">Scegli il codice Immobile:</label>
					              <select NAME="CodTipoImmobili" class="form-control"> 
<?php
 while($riga = mysqli_fetch_array($risu_ca,)) {
  echo '<option value='.$riga['IdTipoImmobile'].'>'.$riga['descrizione'].'</option>';
}
?> 
</select>
<label class ="mt-3 mb-2" >Codice Proprietari</label>
                    <input type="number" class="form-control" name="CodProprietari" size="4"  placeholder="Inserisci il codice dei proprietari" required>  
                    <div class="text-center">
                          <div class="text-center">
                      <button type="submit" value="invia" class="btn btn-primary mt-3 text-center " required>Invia</button>
                      <div class="dropdown-divider "> </div>
                      <a class="btn btn-warning btn-md mt-3 mx-4" href="lista_immobili.php">Torna Alla lista</a>
                      <a class="btn btn-danger btn-md mt-3 " href="../../index.php">Torna al menù principale</a>
                    </div>    
                    </div>
                   
	
    </body>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</html>
