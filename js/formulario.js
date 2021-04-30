function validarFomularioSesion() {
    var nombre = document.getElementById('exampleInputName').value;
    var contraseña = document.getElementById('exampleInputPassword').value;

    if(nombre == "" || contraseña == ""){
        //document.getElementById('exampleInputName').style.borderColor = 'red';
        alert("No ingreso ningun dato complete para continuar");
        location.href="sesion.html";
    }
    else{
        document.formInicio.action = "libreria/validar.php";
        document.formInicio.submit();
    }
}

function formularioUsuario() {
    var opcion = document.getElementById('opcion').value;

    if(opcion == 'Seleccion'){
        alert('Debe seleccionar algo de las opciones validas');
        location.href="../vistasAdministrador/usuarioAdministrador.php";
    }
    else{
        document.getElementById('retornaFormulario').value = 'formularioUsuario';
        document.formInicio.action = '../vistasAdministrador/opcionUsuario.php';
        document.formInicio.submit();
    }
}

function fomularioIngresarUsuario() {
    var nombre = document.getElementById('exampleInputNombre').value;
    var apellido = document.getElementById('exampleInputApellido').value;
    var fecha = document.getElementById('exampleInputFecha').value;
    var Email = document.getElementById('exampleInputEmail1').value;
    var Ciudad = document.getElementById('exampleInputCiudad').value;  
    var Telefono = document.getElementById('exampleInputTelefono').value;
    var Contraseña = document.getElementById('exampleInputContraseña').value;
    var privilegio = document.getElementById('exampleInputOpcionPrivilegio').value;
    var cedula = document.getElementById('exampleInputCedula').value;
    var tipoDocumento = document.getElementById('exampleInputOpcionTipoDocumento').value;

    if(nombre == '' || apellido == '' || fecha == '' || Email == '' || Ciudad == '' || Telefono == '' || Contraseña == '' || privilegio == 'Seleccion' || cedula == '' || tipoDocumento == 'Seleccion'){
        alert('Debe ingresar todos lo campos para registrar usuarios');
        location.href="../vistasAdministrador/usuarioAdministrador.php";
    }
    else{
        document.getElementById('formularioRegistrarUsuario').value = 'formularioRegistrarUsuario';
        document.formInicio.action = '../vistasAdministrador/opcionUsuario.php';
        document.formInicio.submit();
    }
}

function formularioIndexDeuda() {
    var opcion = document.getElementById('opcion').value;

    if(opcion == 'Seleccion'){
        alert('Debe seleccionar algo de las opciones validas');
        location.href="../vistasAdministrador/indexDeuda.php";
    }
    else{
        document.getElementById('retornaFormularioDeuda').value = 'retornaFormularioDeuda';
        document.formInicio.action = '../vistasAdministrador/opcionDeuda.php';
        document.formInicio.submit();
    }
}

function registrarPlan() {
    var nombre = document.getElementById('exampleInputNombre').value;
    var valor = document.getElementById('exampleInputValor').value;
    var cuota = document.getElementById('exampleInputCuota').value;

    if(nombre == '' || valor == '' || cuota == ''){
        alert('Debe ingresar los campos solicitados');
        location.href="../vistasAdministrador/indexDeuda.php";
    }
    else{
        document.getElementById('tipoDeudaRegistrar').value= 'tipoDeudaRegistrar';
        document.formInicio.action = '../vistasAdministrador/opcionDeuda.php';
        document.formInicio.submit();
    }
}

function formularioTratamiento() {
    var nombre = document.getElementById('exampleInputNombre').value;
    var descrition = document.getElementById('exampleInputDescription').value;
    var estado = document.getElementById('exampleInputestado').value;
    var selectCliete = document.getElementById('selectCliente').value;
    var selectTipoPlan = document.getElementById('selectTipoPlan').value;
    var selectDoctor = document.getElementById('selectDoctor').value;
    var fechaImgresada = document.getElementById('exampleInputFecha').value;

    if(estado == 'seleccion' || nombre == '' || descrition == '' || selectCliete == 'seleccion' || selectTipoPlan == 'seleccion' || selectDoctor == 'seleccion' || fechaImgresada == ''){
        alert('Debe ingresar los campos solicitados');
        location.href="../vistasAdministrador/registrarTramientoDeuda.php";
    }
    else {
        //document.getElementById('tipoDeudaRegistrar').value= 'registrarTratamiento';
        document.formInicio.action = '../vistasAdministrador/opcionDeuda.php';
        document.formInicio.submit();
    }
}

function registrarTratamiento() {
    //var idTratamiento = document.getElementById('exampleInputNombre').value;
    var name = document.getElementById('exampleInputNombre').value;
    var status = document.getElementById('exampleInputApelllido').value;
    var description = document.getElementById('exampleInputdescription').value;
    var User_idUser = document.getElementById('exampleInputUser_idUser').value;
    var Doctor_idDoctor = document.getElementById('exampleInputDoctor_idDoctor').value;
    var type_debt_idtype_debt = document.getElementById('exampleInputtype_debt_idtype_debt').value;

    if(name == '' || status == '' || description == '' || User_idUser == '' || Doctor_idDoctor == '' || type_debt_idtype_debt == ''){
        alert('Debe ingresar Valores en los campos Vacios');
        location.href="../vistasAdministrador/indexDeuda.php";
    }
    else{
        document.getElementById('tipoDeudaRegistrar').value= 'modificarTratamiento';
        document.formInicio.action = '../vistasAdministrador/opcionDeuda.php';
        document.formInicio.submit();
    }
}

function registrarContactenos() {
    var name = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;
    var Sujeto = document.getElementById('Sujeto').value;
    var textoArea = document.getElementById('textoArea').value;

    console.log(name);
    if(name == '' || correo == '' || Sujeto == '' || textoArea == ''){
        alert("Diligencia los campos solicitados");
    }
    else{
        document.formInicio.action = 'vistasAdministrador/registrarContactenos.php';
        document.formInicio.submit();
    }
}

function formularioNosotros() {
    var mision = document.getElementById('exampleInputMision').value;
    var vision = document.getElementById('exampleInputVision').value;

    if(mision == '' || vision == ''){
        alert('Debe ingresar los campos solicitados');
        location.href="../vistasAdministrador/nosotrosM_V.php";
    }
    else {
        //document.getElementById('tipoDeudaRegistrar').value= 'registrarTratamiento';
        document.formInicio.action = '../vistasAdministrador/nosotrosM_VIngresar.php';
        document.formInicio.submit();
    }
}