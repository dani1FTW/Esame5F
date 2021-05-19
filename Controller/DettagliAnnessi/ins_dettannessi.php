
<?php
   include "../../model/database/config.php";
      $codTipoAnnesso=$_GET["codTipoAnnesso"];
      $codimmobile =$_GET["codimmobile"];
      $query = "insert into dettagliannesso (codTipoAnnesso,codimmobile ) values ('$codTipoAnnesso', '$codimmobile ')";
         echo "<hr>"; 
         echo "$query";
         echo "<hr>"; 
            $risu = $con->query($query); 
                 echo "<hr>"; 
                     if($con -> errno === 0)
                     {
                        $codice=mysqli_insert_id($con);
                        echo ("Inserimento  Dettagli annessi avvenuto con successo");
                        echo ("Nuovo codice=$codice");
                     }
                        else
                        die("Inserimento non avvenuto" . $con -> error);
                        echo "<hr>";


   header('location: ../../view/dettagliannessi/lista_dettannessi.php' . (isset($MSG) ? '?MESSAGGIO=' .urlencode($MSG) : ''));
?>