<?php
	$server = "localhost";
	$user = "root";  
	$password = ""; 
	$db = "immobili";
	$con = @new mysqli($server, $user, $password, $db);
		if ($con->connect_error) {
		die("Connessione non avvenuta: " . $con->connect_error);
	}	

?> 