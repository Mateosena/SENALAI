<?php

session_start();
if ( $_SESSION['usuario'] ==""  and  $_SESSION['contrasena'] =="" || $_SESSION['Roles_idRoles'] != 4 ) {
	header('Location:../index.php');
	die();
}


require_once('../conexion.php');

require_once('../modelo/registroUsuario.php');

$obj = new registroUsuario();
$consultarsexo = $obj->consultarsexo();
$consultarciudad = $obj->consultarciudad();
$consultarrol = $obj->consultarrol();
$consultarprograma = $obj->consultarprograma();
$consultartipodocumento = $obj->consultartipodocumento();



require_once('../vista/registrarUsuario.php');




?>