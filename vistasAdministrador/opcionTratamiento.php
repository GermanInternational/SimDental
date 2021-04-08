<?php
include '../libreria/Administrador.php';
$adminitrador = new Administrador();

//echo "Llegue".$_POST['idtratamiento'] ;


if (isset($_POST['accion'])){
    if ($_POST['modificarTratamiento'] == "modificarTratamiento") {
        $idtratamiento= $_POST['idtratamiento'];
        header("Location: ../vistasAdministrador/formularioModificarTratamiento.php?user=".$idtratamiento."");

        # code...
    }
        
    }




