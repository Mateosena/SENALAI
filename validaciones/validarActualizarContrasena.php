<?php 
session_start();


if (isset($_POST["envioActualizarContrasena"])){
    sleep(1);
    


    $Numero_Documento = $_SESSION['Numero_Documento'];
    $contrasenaActual= md5($_POST['contrasenaActual']);

    $nuevaContrasena = $_POST['nuevaContrasena'];
    $nuevaContrasena2 = $_POST['nuevaContrasena2'];

 //---- ENCRIMOS LA CONTRASEÑA NUEVA PARA VALIDAR QUE NOS SE IGUAL A LA ANTERIOR----- ///
    $n = md5($nuevaContrasena);
 


 //---- VALIDACIONES DE CONTRASEÑA ACTUAL----- ///
 

   if($contrasenaActual == "" ) { 
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong>  Ingrese su contraseña actual.
    </div>';
   }

   else if ($_SESSION['contrasena'] != $contrasenaActual ){
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong> Su Contraseña actual es incorrecta
    </div>';
   
   }
 //---- VALIDACIONES DE CONTRASEÑA NUEVAL----- ///


     else if(empty($nuevaContrasena) ) {  
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong>  El campo contraseña nueva  no puede ir vacio.
     </div>' ;
     } 

   //NO tiene minimo de 8 caracteres o mas de 30 caracteres  
   else if(strlen($nuevaContrasena) < 8 || strlen($nuevaContrasena) > 30){  
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong>  La Contrasena  no puede tener menos de 8 caracteres o mas de 30 caracteres.
    </div>' ;
   } 
   // SI longitud, NO VALIDO numeros y letras  
   else if(!preg_match("/^[0-9a-zA-Z]+$/", $nuevaContrasena)){  
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong>  El campo contraseña solo debe tener letras y numeros y no pueden haber espacios.
    </div>'; 
   }
   // validar que la nueva contraseña no sea igual a la anterior
   else if ($n == $contrasenaActual) {
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong>  La nueva contraseña no puede ser igual a la anterior.
    </div>';
   } 


//---- VALIDACIONES DEL CONTRASEÑA2 (COINCIDAN)----- /// 

  else if($nuevaContrasena != $nuevaContrasena2){  
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong>  Las contraseñas no coinciden.
    </div>';
   }
  else {

  
        include_once('../conexion.php');
        include_once('../modelo/actualizarDatos.php');
        $encriNuevaContrasena = md5($nuevaContrasena);
        $obj = new actualizarDatos();
        $obj -> actualizarContrasena($encriNuevaContrasena,$Numero_Documento);
        $_SESSION['contrasena'] = $encriNuevaContrasena;
        echo 1;

      

  
  }


}