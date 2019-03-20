<?php 


class registroUsuario{


    public  function consultarsexo(){

    $obj = new conexion();
    $conexion = $obj->conectar();
    $consulta = "select * from Sexo";
    $enviar = mysqli_query($conexion,$consulta);
    return $enviar;

    }



    public  function consultarciudad(){

        $obj = new conexion();
        $conexion = $obj->conectar();
        $consulta = "select * from ciudad";
        $enviar = mysqli_query($conexion,$consulta);
        return $enviar;
    
     }




     public  function consultarrol(){

        $obj = new conexion();
        $conexion = $obj->conectar();
        $consulta = "select * from roles";
        $enviar = mysqli_query($conexion,$consulta);
        return $enviar;
    
     }



     public  function consultarprograma(){

      $obj = new conexion();
      $conexion = $obj->conectar();
      $consulta = "select * from  Programa";
      $enviar = mysqli_query($conexion,$consulta);
      return $enviar;
  
   }


     public  function consultartipodocumento(){

        $obj = new conexion();
        $conexion = $obj->conectar();
        $consulta = "select * from Tipo_documento";
        $enviar = mysqli_query($conexion,$consulta);
        return $enviar;
    
     }



         /*Metodos para registrar un nuevo usuario*/

    public function  validaremailexiste($email){
      $obj = new conexion();
      $conexion = $obj->conectar();
      $consulta ="select * from persona where  Email = '$email' ";
      $enviar = mysqli_query($conexion,$consulta);
      $f = mysqli_fetch_array($enviar);
      return $f;

  }


  public function  validardocumentoexiste($documento){
    $obj = new conexion();
    $conexion = $obj->conectar();
    $consulta ="select * from persona where  Numero_Documento = '$documento' ";
    $enviar = mysqli_query($conexion,$consulta);
    $f = mysqli_fetch_array($enviar);
    return $f;

}

  public function  validarusuarioexiste($usuario){
      $obj = new conexion();
      $conexion = $obj->conectar();
      $consulta ="select * from persona where  Usuario = '$usuario' ";
      $enviar = mysqli_query($conexion,$consulta);
      $f = mysqli_fetch_array($enviar);
      return $f;

  }


  public function  ingresarusuario($nombres,$apellido_primero,$apellido_segundo,$usuario,$rol,$tipodocumento,$documento,$ciudad,$direccion,$email,$sexo,$numero_celular,$telefono,$idprograma,$numero_ficha){
      $obj = new conexion();
      $conexion = $obj->conectar();
      $contrasenaa = $documento;
      $defaultestado = 1;
      $contrasena = md5($contrasenaa);
      $enviar  ="insert into persona (Numero_Documento,Tipo_Documento_idTipo_Documento,Nombre,Apellido_Primero,Apellido_Segundo,Direccion,Email,Estado_idEstado,Telefono,Sexo_idSexo,Numero_Celular,Ciudad_idCiudad,Usuario,Contrasena,Roles_idRoles,Numero_Ficha,Programa_idPrograma) values ('$documento','$tipodocumento','$nombres','$apellido_primero','$apellido_segundo','$direccion','$email','$defaultestado','$telefono','$sexo','$numero_celular','$ciudad','$usuario','$contrasena','$rol','$numero_ficha','$idprograma')";
      $f = mysqli_query($conexion,$enviar);
      

  }


}

?>