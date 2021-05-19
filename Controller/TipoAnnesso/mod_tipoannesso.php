<?php 
include "../../model/database/config.php";
		$IdTipoAnnesso = $_REQUEST['IdTipoAnnesso'];
		$descrizione = $_REQUEST['Descrizione'];
		$sql = "UPDATE tipoannesso
		SET	Descrizione='$descrizione'
		WHERE IdTipoAnnesso=$IdTipoAnnesso	";
		$result = $con->query($sql);
		if ($result == TRUE) {
			echo "Record Aggiornato.";
		}else{
			echo "Errore:" . $sql . "<br>" . $con->error;
		}
			header('location: ../../view/tipoannesso/lista_tipoannesso.php' . (isset($MSG) ? '?MESSAGGIO=' .urlencode($MSG) : ''));
die;
?>
