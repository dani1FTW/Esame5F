<?php 
 //file che permette di collegarsi al database
	include_once "../../model/database/config.php";	
		if (isset($_GET['id'])) {
			//prendiamo le variabili dalla form
			$id = $_GET['id'];
			//Query che permette di cancellare un record 
			$query = "DELETE FROM `tipoannesso` WHERE `idTipoAnnesso`='$id'";
				//la query viene eseguita
			$risu = $con->query($query);
			//Se il risultato è corretto allora ci viene indicato che il record è stato cancellato
			if ($risu == TRUE) {
				echo " Record cancellato.";
			}else{
				//Oppure c'è stato un errore e qua dice, quale errore
				echo "Error:" . $query . "<br>" . $con->error;
			}
		}
		//Comando che ci riporta alla lista
	header('location: ../../view/tipoannesso/Lista_tipoannesso.php');
?>