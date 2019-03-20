<?php


session_start();



if ( $_SESSION['usuario'] ==""  and  $_SESSION['contrasena'] =="" || $_SESSION['Roles_idRoles'] != 4 ) {
	header('Location:../index.php');
	die();
 
}



$numero_documento = $_GET['numero_documento'];  

require_once('../conexion.php');

require_once('../modelo/administrarUsuarios.php');

$obj = new administrarUsuarios();
$obj->inhabilitarUsuario($numero_documento);

header('location:administrarUsuarios.php');










?>