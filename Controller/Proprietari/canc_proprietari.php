<?php 
include "../../model/database/config.php";
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$sql = "DELETE FROM `proprietari` WHERE `idproprietari`='$id'";

			$result = $con->query($sql);

			if ($result == TRUE) {
				echo " Record cancellato.";
			}else{
				echo "Error:" . $sql . "<br>" . $conn->error;
			}
		}
		header('location: ../../view/proprietari/lista_proprietari.php');
?>