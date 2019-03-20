<?php

require_once('../conexion.php');

require_once('../modelo/recuperarContrasena.php');

$codigo = $_GET['codigo'];

$obj = new recuperarContrasena();

$e= $obj->codigoExiste($codigo);

if ($e > 0) {
    
    $fechaactual = date("Y-m-d H:i:s");
    $fechaRecuperacion = $e['Fecha_Recuperacion'];

    if (strtotime($fechaactual) > strtotime($fechaRecuperacion)) {
        ECHO "ESTE LINK EXPIRO O ES INCORRECTO VE A LA APLICACION Y GENERA OTRO";
    }else {
        require_once('../vista/recuperarContrasena.php');
    }

    

}else {
    ECHO "ESTE LINK EXPIRO O ES INCORRECTO VE A LA APLICACION Y GENERA OTRO";
}










?>