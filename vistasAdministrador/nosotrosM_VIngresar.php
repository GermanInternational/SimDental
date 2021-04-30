<?php
	include '../libreria/Administrador.php';

	$Mision = $_POST['Mision'];
	$Vision = $_POST['Vision'];

	$administrador = new Administrador();

	$administrador->ActualizarMisionYVision($Mision, $Vision);

	header("Location: nosotrosM_V.php");
?>