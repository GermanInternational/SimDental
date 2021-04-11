<?php
$file = file_exists('../Conexion/Conexion.php');
if($file){
    include '../Conexion/Conexion.php';
}
else{
    include 'Conexion/Conexion.php';
}

class Administrador
{
   public function ingresarUsuario($nombre, $apellido, $fecha, $email, $ciudad, $telefono, $contra, $privilegio, $tipo_documento, $documento){
       $bd = new Conexion();
       $sql = $bd->prepare("INSERT INTO `user`(`name`, `last_name`, `birth_date`, `address`, `City`, `phone`, `type_document`, `document`, `password`, `rol`, `status`)
                                    VALUES ('$nombre','$apellido','$fecha','$email','$ciudad','$telefono','$tipo_documento','$documento','$contra','$privilegio','1')");
       $sql->execute();
       $idInsertado = $bd->lastInsertId();
       if($idInsertado){
           return $idInsertado;
       }
       else{
           return false;
       }
   }

   public function listarUsuario(){
       $bd = new Conexion();
       $sql= $bd->prepare("SELECT `idUser`, `name`, `last_name`, `birth_date`, `address`, `City`, `phone`, `type_document`, `document`, `password`, `rol`, `status` FROM `user`");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

   public function eliminarUsuario($id){
       $bd = new Conexion();
       $sql = $bd->prepare("DELETE FROM `user` WHERE `idUser` = '$id'");
       $ok = $sql->execute();
       if($ok){
           return true;
       }
       else{
           return false;
       }
   }

   public function mostrarDatosModificar($id){
       $bd = new Conexion();
       $sql = $bd->prepare("SELECT `idUser`, `name`, `last_name`, `birth_date`, `address`, `City`, `phone`, `type_document`, `document`, `password`, `rol`, `status` FROM `user` WHERE idUser = '$id' ");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

   public function modificarUsuario($id, $nombre, $apellido, $fecha, $correo, $ciudad, $telefono, $rol, $estado, $tipo_documento, $documento){
       $bd = new Conexion();
       $sql = $bd->prepare("UPDATE `user` SET `idUser`='$id',`name`='$nombre',`last_name`='$apellido',`birth_date`='$fecha',`address`='$correo',`City`='$ciudad',`phone`='$telefono',`type_document`='$tipo_documento',`document`='$documento',`rol`='$rol',`status`='$estado' WHERE `idUser` = '$id'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $ok = $sql->execute();
       $idInsertado = $bd->lastInsertId();
       if($ok){
           return $idInsertado;
       }
       else{
           return false;
       }
   }

   public function ingresarDoctor($idUser){
       $bd = new Conexion();
       $sql = $bd->prepare("INSERT INTO `doctor`(`fk_user`) VALUES ('$idUser')");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute();
   }

   public function ingresarPlanDeuda($nombre, $valor, $cuota){
       $bd = new Conexion();
       $sql = $bd->prepare("INSERT INTO `type_debt`(`name`, `value`, `share`) VALUES ('$nombre' , '$valor', '$cuota')");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute();
       return $bd->lastInsertId();
   }

   public function listarClientes(){
       $bd = new Conexion();
       $sql = $bd->prepare("SELECT `idUser`, `name`, `last_name` FROM `user` WHERE `rol` = 4 AND status = 1");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

   public function listarTipoPlan(){
       $bd = new Conexion();
       $sql = $bd->prepare("SELECT `idtype_debt`, `name` FROM `type_debt` ");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

   public function listarDoctores(){
       $bd = new Conexion();
       $sql = $bd->prepare("SELECT doctor.idDoctor as idDoctor, user.name as name, user.last_name as last_name FROM doctor INNER JOIN user ON doctor.fk_user = user.idUser WHERE user.rol = 2");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

   public function insertarTramiento($nombre, $descripcion, $idCliente, $idTipoPlan, $idDoctor, $estado){
       $bd = new Conexion();
       $sql = $bd->prepare("INSERT INTO `dental_treatment`(`name`, `status`, `description`, `User_idUser`, `Doctor_idDoctor`, `type_debt_idtype_debt`) 
                                    VALUES ('$nombre','$estado', '$descripcion', '$idCliente','$idDoctor','$idTipoPlan')");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute();
       return $bd->lastInsertId();
   }

   public function getValorTipoTratamiento($idTipoTratamiento){
       $bd = new Conexion();
       $sql= $bd->prepare("SELECT `value` FROM `type_debt` WHERE `idtype_debt` = '$idTipoTratamiento'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

   public function insertarDeuda($idTipoTratamiento, $valor){
       $bd = new Conexion();
       $sql = $bd->prepare("INSERT INTO `debt_treatment`(`status`, `value`, `dental_treatment_iddental_treatment`) 
                            VALUES (1,'$valor','$idTipoTratamiento')");
       $sql->execute();
       return $bd->lastInsertId();
   }

   public function insertarHistorial($idTratamiento, $descripcion, $fecha){
       $bd = new Conexion();
       $sql = $bd->prepare("INSERT INTO `history`(`description`, `date`, `dental_treatment_iddental_treatment`)
                    VALUES ('$descripcion','$fecha','$idTratamiento')");
       $sql->execute();
       return $bd->lastInsertId();
   }

   public function listarPlanes(){
       $bd = new Conexion();
       $sql = $bd->prepare("SELECT `idtype_debt`, `name`, `value`, `share` FROM `type_debt`");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

   public function mostrarDatosPlan($idPlan){
       $bd = new Conexion();
       $sql = $bd->prepare("SELECT `idtype_debt`, `name`, `value`, `share` FROM `type_debt` WHERE idtype_debt='$idPlan'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

   public function modificarPlan($idPlan, $nombre, $valor, $cuota){
       $bd = new Conexion();
       $sql = $bd->prepare("UPDATE `type_debt` SET `idtype_debt`='$idPlan',`name`='$nombre',`value`='$valor',`share`='$cuota' WHERE idtype_debt = '$idPlan'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute();
   }

   public function listarTratamiento(){
       $bd = new Conexion();
       $sql = $bd->prepare("SELECT `idDental_treatment`, `name`, `status`, `description`, `User_idUser`, `Doctor_idDoctor`, `type_debt_idtype_debt` FROM `dental_treatment`");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

   public function mostrarDatosTratamiento($idTratamiento){
       $bd = new Conexion();
       $sql = $bd->prepare("SELECT `idDental_treatment`, `name`, `status`, `description`, `User_idUser`, `Doctor_idDoctor`, `type_debt_idtype_debt` FROM `dental_treatment` WHERE idDental_treatment='$idTratamiento'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

    public function modificarTratamiento($idTratamiento, $nombre, $estado, $Descripcion, $userId, $doctorId, $planId){
       $bd = new Conexion();
       $sql = $bd->prepare("UPDATE `dental_treatment` SET `idDental_treatment`='$idTratamiento',`name`='$nombre',`status`='$estado',`description`='$Descripcion', `User_idUser`='$userId',`Doctor_idDoctor`='$doctorId',`type_debt_idtype_debt`='$planId' WHERE idDental_treatment = '$idTratamiento'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute();
    }

    public function mostrarDatosUsuarioTratamiento($idusuario){
       $bd = new Conexion();
       $sql = $bd->prepare("SELECT `name` FROM `user` WHERE `idUser` = '$idusuario'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
    }

    public function mostrarDatosDoctorTratamiento($idDocotor){
       $bd = new Conexion();
       $sql = $bd->prepare("SELECT `fk_user` FROM `doctor` WHERE `idDoctor` = '$idDocotor'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
    }

    public function listarUsuarioConId($User_idUser){
       $bd = new Conexion();
       $sql= $bd->prepare("SELECT `idUser`, `name`, `last_name`, `birth_date`, `address`, `City`, `phone`, `type_document`, `document`, `password`, `rol`, `status` FROM `user` where `idUser` = '$User_idUser'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

   public function listarDoctoresConId($Doctor_idDoctor){
       $bd = new Conexion();
       $sql = $bd->prepare("SELECT `user`.`name`, `user`.`last_name` FROM `doctor` INNER JOIN `user`ON `doctor`.`fk_user` = `user`.`idUser` WHERE `doctor`.`idDoctor` = '$Doctor_idDoctor'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

    public function listaTipoTramiento($type_debt_idtype_debt){
       $bd = new Conexion();
       $sql = $bd->prepare("SELECT `name` FROM `type_debt` WHERE `idtype_debt` = '$type_debt_idtype_debt'");
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array());
       $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

    public function eliminarTramiento($idTratamiento){
       $bd = new Conexion();
       $sql = $bd->prepare("DELETE FROM `dental_treatment` WHERE `idDental_treatment` = '$idTratamiento'");
       $ok = $sql->execute();
       if($ok){
           return true;
       }
       else{
           return false;
       }
   }

    public function insertarContactenos($name, $correo, $sujeto, $area){
       $bd = new Conexion();
       $sql = $bd->prepare("INSERT INTO `contactenos`(`nombre`, `correo`, `sujeto`, `texto`) VALUES ('$name','$correo','$sujeto','$area')");
       $sql->execute();
       return $bd->lastInsertId();
   }

    public function listarTratamientoConCondicion($buscardoTratamientos){
       $bd = new Conexion();
       $query = "SELECT `idDental_treatment`, `name`, `status`, `description`, `User_idUser`, `Doctor_idDoctor`, `type_debt_idtype_debt` FROM `dental_treatment` WHERE`name` like CONCAT('%', :var1, '%')";
       $sql = $bd->prepare($query);
       $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql->execute(array(':var1' => $buscardoTratamientos));
       $ok = $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
       return $rows;
   }

}