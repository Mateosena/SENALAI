<?php
sleep(2);
session_start();

 include('../conexion.php');
 include('../modelo/loginUsuario.php');



$usuario = $_POST{'usuario'} ;
$contrasenaa = $_POST{'contrasena'};

$contrasena = md5($contrasenaa);
/* validar usuario con el modelo*/
$obj = new LoginUsuario();
$resultado = $obj->validarUsuario($usuario,$contrasena);

$fila = mysqli_fetch_array($resultado);


/*------VARIABLES PARA REUTILIZAR ---------*/

$_SESSION['usuario'] = $fila['Usuario'];

$_SESSION['contrasena'] = $fila['Contrasena'];

$_SESSION['Numero_Documento'] = $fila['Numero_Documento'];

$_SESSION['Nombre'] = $fila['Nombre'];

$_SESSION['Apellido_Primero'] = $fila['Apellido_Primero'];

$_SESSION['Email'] = $fila['Email'];

$_SESSION['Telefono'] = $fila['Telefono'];

$_SESSION['Roles_idRoles'] = $fila['Roles_idRoles'];







/*------VALIDACIONES LOGIN ---------*/

if ($usuario == "") {
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong> El campo usuario no puede ir vacio  
    </div>';
}

else if($contrasenaa ==""){
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong> El campo contraseña no puede ir vacio 
    </div>';
}




else if($fila > 0){



    if ($fila['Estado_idEstado'] != 1) {
        echo  '<div class="alert alert-danger">
    <strong>ERROR!</strong> Usuario "inhabilitado"  
    </div>';
    }else {
        echo 1;
    }

        
    

     
}
 else{
    echo  '<div class="alert alert-danger">
    <strong>ERROR!</strong> Datos incorretos "intentalo de nuevo"  
    </div>';
}







?>
