<?php 

class loginUsuario{

    public function validarUsuario($usuario,$contrasena){

    $obj = new conexion();
    $conexion = $obj->conectar();
    $consulta = "select * from Persona
    where Usuario = '$usuario' and Contrasena = '$contrasena' or  Email= '$usuario' and Contrasena = '$contrasena'";
    $enviar = mysqli_query($conexion,$consulta);
    return $enviar;
    }


    public function validarEmailRecuperarContrasena($email){

        $obj = new conexion();
        $conexion = $obj->conectar();
        $consulta = "select * from Persona
        where   Email= '$email' ";
        $enviar = mysqli_query($conexion,$consulta);
        $f = mysqli_fetch_array($enviar);
        return $f;

    }



}






?>