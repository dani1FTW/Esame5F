<?php 
	include_once "../../model/database/config.php";	
$IdImmobili=$_GET['IdImmobili'];
$descrizione=$_GET['descrizione'];
$vani=$_GET['vani'];
$superficie=$_GET['superficie'];
$prezzo=$_GET['prezzo'];
$CE=$_GET['CE'];
$anno=$_GET['anno'];
$CodTipoImmobili=$_GET['CodTipoImmobili'];
$CodProprietari=$_GET['CodProprietari'];
		$sql = "UPDATE immobili
		SET	descrizione='$descrizione',
        vani='$vani',
		superficie='$superficie',
		prezzo='$prezzo',
		CE='$CE',
		anno='$anno',
		CodTipoImmobili='$CodTipoImmobili',
		CodProprietari='$CodProprietari'
		WHERE IdImmobili ='$IdImmobili '";
		$result = $con->query($sql);
		if ($result == TRUE) {
			echo "Record Aggiornato.";
		}else{
			echo "Errore:" . $sql . "<br>" . $con->error;
		}
			header('location: ../../view/immobili/lista_immobili.php' . (isset($MSG) ? '?MESSAGGIO=' .urlencode($MSG) : ''));
die;
?>
