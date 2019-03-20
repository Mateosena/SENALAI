<?php 

class recuperarContrasena{

    public function validarEmailRecuperarContrasena($email){

        $obj = new conexion();
        $conexion = $obj->conectar();
        $consulta = "select * from Persona
        where   Email= '$email' ";
        $enviar = mysqli_query($conexion,$consulta);
        $f = mysqli_fetch_array($enviar);
        return $f;

    }

    public function datosRecuperacion($codigo,$email,$fechaRecuperacion){

        $obj = new conexion();
        $conexion = $obj->conectar();
        $consulta = " UPDATE persona SET CodigoRC = '$codigo', fecha_Recuperacion = '$fechaRecuperacion' WHERE Email = '$email'" ;
        $enviar = mysqli_query($conexion,$consulta);
    
    }


    public function codigoExiste($codigo){

        $obj = new conexion();
        $conexion = $obj->conectar();
        $consulta = "select Numero_Documento,Fecha_Recuperacion  from persona where CodigoRC ='$codigo' " ;
        $enviar = mysqli_query($conexion,$consulta);
        $f = mysqli_fetch_array($enviar);
        return $f;
    }

    public function actualizarContrasena($encriNuevaContrasena,$codigo){
        $obj = new conexion();
        $conexion = $obj->conectar();
        $consulta = "update  persona set contrasena ='$encriNuevaContrasena',Fecha_Recuperacion='0000-00-00 00:00:00' 
        where  CodigoRC = '$codigo'";
        $enviar = mysqli_query($conexion,$consulta);

    }



}