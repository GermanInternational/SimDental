<?php
$file = file_exists('../Conexion/Conexion.php');
if($file){
    include '../Conexion/Conexion.php';
}
else{
    include 'Conexion/Conexion.php';
}

class Doctor
{
	public function idDoctor($idUsuario){
       $bd = new Conexion();
       $sql= $bd->prepare("SELECT `idDoctor` FROM `doctor` WHERE `fk_user` = '$idUsuario'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

   public function ListarTratamiento($idDoctor){
       $bd = new Conexion();
       $sql= $bd->prepare("SELECT `idDental_treatment`, `name`, `status`, `description`, `User_idUser`, `Doctor_idDoctor`, `type_debt_idtype_debt` FROM `dental_treatment` WHERE `Doctor_idDoctor` = '$idDoctor'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

   public function ListarUsuario($idUsuario){
       $bd = new Conexion();
       $sql= $bd->prepare("SELECT `idUser`, `name`, `last_name`, `birth_date`, `address`, `City`, `phone`, `type_document`, `document`, `password`, `rol`, `status` FROM `user` WHERE `idUser` = '$idUsuario'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

   public function ListarTipoDeuda($idTipoDeuda){
       $bd = new Conexion();
       $sql= $bd->prepare("SELECT `idtype_debt`, `name`, `value`, `share` FROM `type_debt` WHERE `idtype_debt` = '$idTipoDeuda'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }
}

?>