<?php
$file = file_exists('../Conexion/Conexion.php');
if($file){
    include '../Conexion/Conexion.php';
}
else{
    include 'Conexion/Conexion.php';
}

class Metodo
{


    /**
     * Metodo constructor.
     */

    public function verificarSesion($nombre, $password){
        $bd = new Conexion();
        $pass=md5($password);
        $sql= $bd->prepare("SELECT name, password, rol, idUser, status FROM `user` WHERE `name` = '$nombre' AND `password` = '$pass'");
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql->execute(array());
        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}