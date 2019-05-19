<?php
	$server = "localhost:3306";
	$user = "cbtisco1_ABAK";
	$password = "A'BAKteam2019";
	$bd = "cbtisco1_Control-de-egresados";

	$conexion = mysqli_connect($server, $user, $password, $bd);
	if (!$conexion){ 
		die('Error de Conexión: ' . mysqli_connect_errno());	
	}	
?>
