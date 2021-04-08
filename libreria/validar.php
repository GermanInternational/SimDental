<?php
session_start();
include 'Metodo.php';

$nombre = $_POST['nombre'];
$contra = $_POST['contraseña'];

$metodo = new Metodo();

$result = $metodo->verificarSesion($nombre, $contra);

if($result){
    foreach ($result as $item){
        $_SESSION["nombre"] = $item['name'];
        $_SESSION["contra"] = $item['password'];
        $_SESSION["rol"] = $item['rol'];
        $_SESSION["idUser"] = $item['idUser'];
        $_SESSION["status"] = $item['status'];
        if($_SESSION["status"] == 1){
            if($_SESSION["rol"] == 1){
                header('Location: ../vistasAdministrador/indexAdministrador.php');
            }
            else{

            }
        }
        else{
            header('Location: ../sesionInactivo.html');
        }

    }
}
else{
    header('Location: ../sesionError.html');
}




