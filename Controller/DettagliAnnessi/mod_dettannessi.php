<?php 
include "../../model/database/config.php";
		$idDettagliAnnesso=$_REQUEST['idDettagliAnnesso'];
		$codTipoAnnesso=$_REQUEST['codTipoAnnesso'];
        $codimmobile =$_REQUEST ['codimmobile'];
		$sql = "UPDATE dettagliannesso
		SET	codTipoAnnesso='$codTipoAnnesso',
        codimmobile='$codimmobile'
		WHERE idDettagliAnnesso='$idDettagliAnnesso'";
		$result = $con->query($sql);
		if ($result == TRUE) {
			echo "Record Aggiornato.";
		}else{
			echo "Errore:" . $sql . "<br>" . $con->error;
		}
			header('location: ../../view/dettagliannessi/lista_dettannessi.php' . (isset($MSG) ? '?MESSAGGIO=' .urlencode($MSG) : ''));
die;
?>
