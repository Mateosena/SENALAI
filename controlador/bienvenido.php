<?php 

session_start();
if ( $_SESSION['usuario'] ==""  and  $_SESSION['contrasena'] =="" || $_SESSION['Roles_idRoles'] != 4 ) {
	header('Location:../index.php');
	die();
 
}

require_once('../vista/bienvenido.php');

?>