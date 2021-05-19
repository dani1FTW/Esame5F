
<?php		 
//file che permette di collegarsi al database
	include_once "../../model/database/config.php";	
      $descrizione=$_GET["descrizione"];
      $query = "insert into tipoimmobile (descrizione) values ('$descrizione');";
            echo "<hr>"; 
            echo "$query";
            echo "<hr>"; 
            	//la query viene eseguita
            $risu = $con->query($query); 
            echo "<hr>"; 
               if($con -> errno === 0)
               {
                  $codice=mysqli_insert_id($con);
                  echo ("Inserimento  Tipo Immobile avvenuto con successo");
                  echo ("Nuovo codice=$codice");
               }
                  else
                  {
                  die("Inserimento non avvenuto" . $con -> error);
                  echo "<hr>";
                  }
	header('location: ../../view/tipoimmobile/lista_tipoimmobile.php' . (isset($MSG) ? '?MESSAGGIO=' .urlencode($MSG) : ''));

?>