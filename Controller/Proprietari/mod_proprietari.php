<?php 
include "../../model/database/config.php";
		$IdProprietari = $_REQUEST['IdTipoImmobile'];
		$nome = $_REQUEST['Nome'];
		$cognome=$_REQUEST['Cognome'];
		$sql = "UPDATE proprietari
		SET	Nome='$nome',
			Cognome ='$cognome'
		WHERE IdProprietari=$IdProprietari";
		$result = $con->query($sql);
		if ($result == TRUE) {
			echo "Record Aggiornato.";
		}else{
			echo "Errore:" . $sql . "<br>" . $con->error;
		}
			header('location: ../../view/proprietari/lista_proprietari.php' . (isset($MSG) ? '?MESSAGGIO=' .urlencode($MSG) : ''));
die;
?>
