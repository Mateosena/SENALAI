<?php
session_start();

if ( $_SESSION['usuario'] ==""  and  $_SESSION['contrasena'] =="" || $_SESSION['Roles_idRoles'] != 4 ) {
	header('Location:../index.php');
	die();

}

$documento = $_GET['numero_documento'];


require_once('../conexion.php');

require_once('../modelo/administrarUsuarios.php');
require_once('../modelo/registroUsuario.php');
$obj = new registroUsuario();
$consultarsexo = $obj->consultarsexo();
$consultarciudad = $obj->consultarciudad();
$consultarrol = $obj->consultarrol();
$consultarprograma = $obj->consultarprograma();
$consultartipodocumento = $obj->consultartipodocumento();

$obj1 = new administrarUsuarios();
$f =$obj1->consultarDatosDeUsuarioAEditar($documento);

$valores = mysqli_fetch_array($f);





require_once('../vista/coordinadorEditarDatos.php');


?>