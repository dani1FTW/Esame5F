<?php
 //file che permette di collegarsi al database
	include_once "../../model/database/config.php";	
   		//prendiamo le variabili dalla form
      $descrizione=$_GET["descrizione"];
      	//Query per l'inserimento della descrizione nel database
      $query = "insert into tipoannesso (descrizione) values ('$descrizione');";
         //Comando che stampa la Query
         echo "<hr>"; 
         echo "$query";
         echo "<hr>"; 
         	//la query viene eseguita
            $risu = $con->query($query); 
            echo "<hr>"; 
               if($con -> errno === 0)
                  {
                  $codice=mysqli_insert_id($con);
                  //Codice presente nell'IdTipoAnnesso
                  echo ("Inserimento  Annesso avvenuto con successo");
                  echo ("Nuovo codice=$codice");
                  }
                  else{
                  die("Inserimento non avvenuto" . $con -> error);
                  echo "<hr>";} 
         //File che fa un redirect alla lista 
header('location: ../../view/tipoannesso/lista_tipoannesso.php' . (isset($MSG) ? '?MESSAGGIO=' .urlencode($MSG) : ''));
?>