<?php
include '../libreria/Administrador.php';

$administrador = new Administrador();

if(isset($_POST['retornaFormularioDeuda'])){
    if($_POST['opcion'] == 1){
        header("Location: ../vistasAdministrador/registrarDeuda.php");
    }
    else if($_POST['opcion'] == 2){
        header("Location: ../vistasAdministrador/registrarTramientoDeuda.php");
    }
    else if($_POST['opcion']==3){
        header("Location: ../vistasAdministrador/listarPlanes.php");
    }
    else if($_POST['opcion']==4){
        header("Location: ../vistasAdministrador/modificarPlan.php");
    }
    else if($_POST['opcion']==5){
        header("Location: ../vistasAdministrador/listarTratamiento.php");
    }
    else if($_POST['opcion']==6){
        header("Location: ../vistasAdministrador/modificarTratamiento.php");
        //echo "entre por el 6";
    }
    else if($_POST['opcion']==7){
        header("Location: ../vistasAdministrador/eliminarTramiento.php");
        //echo "entre por el 7";
    }
}
else{
    if(isset($_POST['tipoDeudaRegistrar'])){
        if($_POST['tipoPlan']=='registrarPlan'){
            $result = $administrador->ingresarPlanDeuda($_POST['nombre'], $_POST['valor'], $_POST['cuota']);
            if($result){
                header("Location: ../vistasAdministrador/registrarDeudaConExito.php");
            }
        }
        else if ($_POST['tipoPlan']=='modificarPlan'){
            if($_POST['accion']=='Modificar'){
                if($_POST['nombre']==null || $_POST['valor'] == null ||$_POST['cuota']==null){
                    header("Location: ../vistasAdministrador/formularioModificarPlan.php?user=".$_POST['idPlan']."");
                }
                else{
                    $administrador->modificarPlan($_POST['idPlan'], $_POST['nombre'], $_POST['valor'], $_POST['cuota']);
                    header("Location: ../vistasAdministrador/formularioModificarPlan.php?user=".$_POST['idPlan']."");
                }
            }

            else{
                header("Location: ../vistasAdministrador/formularioModificarPlan.php?user=".$_POST['idUser']);
            }
        }
        else if ($_POST['tipoPlan']=='eliminarTratamiento'){
            //echo $_POST['idUser'];
            if(isset($_POST['idUser'])){
                $administrador->eliminarTramiento($_POST['idUser']);
                header("Location: ../vistasAdministrador/eliminarTramiento.php");
            }
            else{
                 header("Location: ../vistasAdministrador/eliminarTramientoBuscador.php?tratamiento=".$_POST['buscardoTratamiento']);
                
            }
            
        }
    }  
    else{
        //echo "entre en el insertar tratamiento ";
        $idTratamiento = $administrador->insertarTramiento($_POST['nombre'], $_POST['descripcion'], $_POST['opcionCliente'], $_POST['opcionTipoPlan'], $_POST['opcionDoctor'], $_POST['exampleInputestado']);
        $valor = $administrador->getValorTipoTratamiento($_POST['opcionTipoPlan']);
        foreach ($valor as $value){
        }
        $administrador->insertarHistorial($idTratamiento,  $_POST['descripcion'], $_POST['fecha']);
        $result = $administrador->insertarDeuda($idTratamiento, $value['value']);
        if($result){
            header("Location: ../vistasAdministrador/registrarTramientoDeudaConExito.php");
        }
    }
}

