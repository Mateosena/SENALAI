<?php


session_start();

if ( $_SESSION['usuario'] ==""  ||  $_SESSION['contrasena'] ==""  ) {
    header('Location:../index.php');
    die();
   
}

require_once('../vista/actualizarContrasena.php')


?>