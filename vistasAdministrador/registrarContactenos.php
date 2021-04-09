<?php 
	session_start();
	include '../libreria/Administrador.php';


	$name = $_POST['nombre'];
	$correo = $_POST['correo'];
	$sujeto = $_POST['Sujeto'];
	$area = $_POST['textoArea']; 


	$administrador = new Administrador();
    $administrador->insertarContactenos($name, $correo, $sujeto, $area);
    header('Location: ../contact.html');
?>