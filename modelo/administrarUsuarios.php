<?php

class administrarUsuarios{


    public function consultarUsuarios(){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="SELECT Numero_Documento,Estado_idEstado,Nombre,Apellido_Primero,Telefono,Direccion,Numero_Celular,Email,Usuario,NombrePrograma,Numero_Ficha,NombreCiudad,NombreRoles,Tipo_Documento,NombreSexo,Apellido_Segundo FROM persona   JOIN Programa ON Persona.Programa_idPrograma=Programa.idPrograma  JOIN Ciudad ON Persona.Ciudad_idCiudad=Ciudad.idCiudad JOIN Roles ON Persona.Roles_idRoles=Roles.idroles JOIN Tipo_Documento ON Persona.Tipo_Documento_idTipo_Documento=Tipo_Documento.idTipo_Documento   JOIN Sexo ON Persona.Sexo_idSexo=Sexo.idSexo";
        $enviar =  mysqli_query($conexion,$consulta);
        return $enviar;
    }

    public function consultarDatosDeUsuarioAEditar($documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="SELECT Numero_Documento,Estado_idEstado,Nombre,Apellido_Primero,Telefono,Direccion,Numero_Celular,Email,Usuario,NombrePrograma,Numero_Ficha,NombreCiudad,NombreRoles,Tipo_Documento,NombreSexo,Apellido_Segundo FROM persona   JOIN Programa ON Persona.Programa_idPrograma=Programa.idPrograma  JOIN Ciudad ON Persona.Ciudad_idCiudad=Ciudad.idCiudad JOIN Roles ON Persona.Roles_idRoles=Roles.idroles JOIN Tipo_Documento ON Persona.Tipo_Documento_idTipo_Documento=Tipo_Documento.idTipo_Documento   JOIN Sexo ON Persona.Sexo_idSexo=Sexo.idSexo WHERE Numero_Documento = '$documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        return $enviar;
    }

    public function consultarUsuariosPorLike($q){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="SELECT Numero_Documento,Estado_idEstado,Nombre,Apellido_Primero,Telefono,Direccion,Numero_Celular,Email,Usuario,NombrePrograma,Numero_Ficha,NombreCiudad,NombreRoles,Tipo_Documento,NombreSexo,Apellido_Segundo FROM persona   JOIN Programa ON Persona.Programa_idPrograma=Programa.idPrograma  JOIN Ciudad ON Persona.Ciudad_idCiudad=Ciudad.idCiudad JOIN Roles ON Persona.Roles_idRoles=Roles.idroles JOIN Tipo_Documento ON Persona.Tipo_Documento_idTipo_Documento=Tipo_Documento.idTipo_Documento   JOIN Sexo ON Persona.Sexo_idSexo=Sexo.idSexo   WHERE Numero_documento LIKE '%$q%' OR Email LIKE '%$q%' OR Usuario LIKE '%$q%' OR NombrePrograma LIKE '%$q%' OR Numero_Ficha LIKE '%$q%' OR NombreCiudad LIKE '%$q%'";
        $enviar =  mysqli_query($conexion,$consulta);
        return $enviar;
        
    }


    public function inhabilitarUsuario($numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Estado_idEstado = '2' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }

    public function habilitarUsuario($numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Estado_idEstado = '1' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }


    public function cambiarNombre($nuevonombre,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Nombre = '$nuevonombre' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }

    public function cambiarDocumento($nuevodocumento,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Numero_documento = '$nuevodocumento' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }

    public function cambiarPrimerApellido($NuevoApellido,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Apellido_Primero = '$NuevoApellido' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }

    public function cambiarSegundoApellido($NuevoApellido,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Apellido_Segundo = '$NuevoApellido' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }

    public function cambiarDireccion($NuevoDireccion,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Direccion = '$NuevoDireccion' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }

    public function cambiarNumeroCelular($NuevoNumerocelular,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Numero_Celular = '$NuevoNumerocelular' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }


    public function cambiarTelefono($NuevoTelefono,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Telefono = '$NuevoTelefono' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }


    public function cambiarEmail($NuevoEmail,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Email = '$NuevoEmail' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }

    public function cambiarSexo($NuevoSexo,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Sexo_idSexo = '$NuevoSexo' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }


    public function cambiarPrograma($NuevoPrograma,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Programa_idPrograma = '$NuevoPrograma' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }

    public function cambiarficha($NuevoPrograma,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Numero_Ficha = '$NuevoPrograma' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }


    public function cambiarCiudad($NuevoCiudad,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Ciudad_idCiudad = '$NuevoCiudad' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }


    public function cambiarUsuario($NuevoUsuario,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Usuario = '$NuevoUsuario' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }

    public function cambiarRol($NuevoRol,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Roles_idRoles = '$NuevoRol' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }


    public function cambiarTipodocumento($NuevoTipoDocumento,$numero_documento){
        $obj = new conexion();
        $conexion= $obj->conectar();
        $consulta="update persona set Tipo_Documento_idTipo_Documento = '$NuevoTipoDocumento' where Numero_documento ='$numero_documento' ";
        $enviar =  mysqli_query($conexion,$consulta);
        
    }


}