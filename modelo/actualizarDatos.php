<?php 

class actualizarDatos{
  



    public function actualizarContrasena($encriNuevaContrasena,$Numero_Documento){
        $obj = new conexion();
        $conexion = $obj->conectar();
        $consulta = "update  persona set contrasena ='$encriNuevaContrasena'
        where  Numero_Documento = '$Numero_Documento'";
        $enviar = mysqli_query($conexion,$consulta);

    }

}





?>