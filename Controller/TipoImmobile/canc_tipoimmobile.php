<?php 
	 //file che permette di collegarsi al database
	include_once "../../model/database/config.php";			
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			//Query che permette di cancellare un record 
			$query = "DELETE FROM `tipoimmobile` WHERE `idtipoimmobile`='$id'";
			//la query viene eseguita
			$risu = $con->query($query);
			//se il risultato è "vero" il record viene cancellato
				if ($risu == TRUE) {
					echo " Record cancellato.";
					}else{
						//c'è un errore e qua dice quale
					echo "Error:" . $query . "<br>" . $con->error;
				}
			}
			//file che ci redirecta alla lista del tipo di immobile
		header('location: ../../view/tipoimmobile/lista_tipoimmobile.php');
?>