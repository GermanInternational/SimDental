<?php
include '../libreria/Administrador.php';
$adminitrador = new Administrador();
if(isset($_POST['retornaFormulario'])){
    if($_POST['retornaFormulario'] == 'formularioUsuario'){
        $opcionFomularioAdminstrador =$_POST['opcion'];
        echo "opcion ingresada ".$opcionFomularioAdminstrador;
        if($opcionFomularioAdminstrador == 1){
            header('Location: registrarUsuarios.php');
        }
        elseif ($opcionFomularioAdminstrador == 2){
            header('Location: listarUsuarios.php');
        }
        elseif ($opcionFomularioAdminstrador == 3){
            header('Location: modificarUsuarios.php');
        }
        elseif ($opcionFomularioAdminstrador == 4){
            header('Location: eliminarUsuarios.php');

        }
        else{
            header('Location: ../vistasAdministrador/usuarioAdministrador.php');
        }
    }
}
else{
    if(isset($_POST['formularioRegistrarUsuario'])){
        if ($_POST['formularioRegistrarUsuario'] == 'formularioRegistrarUsuario'){
            if($_POST['opcionPrivilegio'] == 2){
                $result = $adminitrador->ingresarUsuario($_POST['nombre'], $_POST['apellido'], $_POST['fecha'], $_POST['email'], $_POST['ciudad']
                    , $_POST['telefono'], $_POST['password'],
                    $_POST['opcionPrivilegio'], $_POST['opcionTipoDocuemto'], $_POST['cedula']);
                $adminitrador->ingresarDoctor($result);
            }
            else{
                $result = $adminitrador->ingresarUsuario($_POST['nombre'], $_POST['apellido'], $_POST['fecha'], $_POST['email'], $_POST['ciudad']
                    , $_POST['telefono'], $_POST['password'],
                    $_POST['opcionPrivilegio'], $_POST['opcionTipoDocuemto'], $_POST['cedula']);
            }

            if($result){
                header('Location: ../vistasAdministrador/registrarUsuarioConExito.php');
            }
        }
    }
    elseif (isset($_GET['modificar'])){
        header("Location: ../vistasAdministrador/formularioModificarUsuarios.php?user=".$_GET['idUser']."");
    }
    elseif(isset($_POST['modificar'])){
        if($_POST['nombre'] == null || $_POST['apellido'] == null || $_POST['fecha'] == null || $_POST['email'] == null
            || $_POST['ciudad'] == null || $_POST['telefono'] == null || $_POST['opcionRol'] == null || $_POST['opcionEstado'] == null){

            header("Location: ../vistasAdministrador/formularioModificarUsuarios.php?user=".$_POST['idUser']."");
        }
        else{
            $result = $adminitrador->modificarUsuario($_POST['idUser'], $_POST['nombre'], $_POST['apellido'], $_POST['fecha'], $_POST['email'],
                $_POST['ciudad'], $_POST['telefono'], $_POST['opcionRol'],  $_POST['opcionEstado'], $_POST['opcionTipoDocumento'], $_POST['documento']);
            if($_POST['opcionRol'] == 2){
                $adminitrador->ingresarDoctor($_POST['idUser']);
            }
            header("Location: ../vistasAdministrador/formularioModificarUsuarios.php?user=".$_POST['idUser']."");

        }

    }
    else{
        if($_POST['idUser'] != null){

            $ok = $adminitrador->eliminarUsuario($_POST['idUser']);
            if($ok){
                header('Location: eliminarUsuarios.php');
            }
            else{
                header('Location: eliminarUsuariosConTratamiento.php');
            }
        }
        header('Location: eliminarUsuarios.php');
    }
}






