<?php 
	include_once "../../model/database/config.php";	
		$IdTipoImmobile = $_REQUEST['IdTipoImmobile'];
		$descrizione = $_REQUEST['descrizione'];
		
		$sql = "UPDATE tipoimmobile
		SET	descrizione='$descrizione'
		WHERE IdTipoImmobile=$IdTipoImmobile";
		$result = $con->query($sql);
		if ($result == TRUE) {
			echo "Record Aggiornato.";
		}else{
			echo "Errore:" . $sql . "<br>" . $con->error;
		}
			header('location: ../../view/tipoimmobile/lista_tipoimmobile.php' . (isset($MSG) ? '?MESSAGGIO=' .urlencode($MSG) : ''));
die;
?>
