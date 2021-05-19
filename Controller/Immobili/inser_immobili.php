<?php
	include_once "../../model/database/config.php";	
 $descrizione=$_GET['descrizione'];
 $vani=$_GET['vani'];
 $superficie=$_GET['superficie'];
 $prezzo=$_GET['prezzo'];
 $CE=$_GET['CE'];
 $anno=$_GET['anno'];
 $CodTipoImmobili=$_GET['CodTipoImmobili'];
 $CodProprietari=$_GET['CodProprietari'];
 $query = "INSERT INTO immobili (descrizione, vani, superficie, prezzo,CE, anno,CodTipoImmobili,CodProprietari) VALUES ('$descrizione', '$vani','$superficie','$prezzo','$CE','$anno','$CodTipoImmobili','$CodProprietari')";
 echo "<hr>"; 
 echo "$query";
 echo "<hr>"; 
 $risu = mysqli_query($con,$query); 
 echo "<hr>"; 
 if($risu) 
	{
	$codice=mysqli_insert_id($con);
	echo ("Inserimento  movimento avvenuto con successo");
	echo ("Nuovo codice=$codice");
	} 
 else
	die("Inserimento non avvenuto" . mysqli_error($con));
 echo "<hr>"; 
 mysqli_close($con);
 header('location: ../../view/immobili/lista_immobili.php' . (isset($MSG) ? '?MESSAGGIO=' .urlencode($MSG) : ''));
?>
