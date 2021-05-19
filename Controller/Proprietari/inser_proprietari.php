
<?php
include "../../model/database/config.php";
      $nome=$_GET["nome"];
      $cognome=$_GET["cognome"];
      $query = "insert into proprietari (nome,cognome) values ('$nome', '$cognome');";
         echo "<hr>"; 
         echo "$query";
         echo "<hr>"; 
            $risu = $con->query($query); 
                 echo "<hr>"; 
                     if($con -> errno === 0)
                     {
                        $codice=mysqli_insert_id($con);
                        echo ("Inserimento  Proprietari avvenuto con successo");
                        echo ("Nuovo codice=$codice");
                     }
                        else
                        die("Inserimento non avvenuto" . $con -> error);
                        echo "<hr>";


   header('location: ../../view/proprietari/lista_proprietari.php' . (isset($MSG) ? '?MESSAGGIO=' .urlencode($MSG) : ''));
?>