<?php 


if (isset($_POST['codigo'])) {

    require('../conexion.php');
    require('../modelo/recuperarContrasena.php');

    $Rcontrasena1 = $_POST['Rcontrasena1'];
    $Rcontrasena2 = $_POST['Rcontrasena2'];
    $codigo = $_POST['codigo'];


     if(empty($Rcontrasena1) ) {  
        echo '<div class="alert alert-danger">
        <strong>ERROR!</strong>  El campo Nueva contraseña  no puede ir vacio.
         </div>' ;
         } 

       // SI longitud, NO VALIDO numeros y letras  
       else if(!preg_match("/^[0-9a-zA-Z]+$/", $Rcontrasena1)){  
        echo '<div class="alert alert-danger">
        <strong>ERROR!</strong>  El campo contraseña solo debe tener letras y numeros y no pueden haber espacios.
        </div>'; 
       }

           
       //NO tiene minimo de 8 caracteres o mas de 30 caracteres  
       else if(strlen($Rcontrasena1) < 8 || strlen($Rcontrasena1) > 30){  
        echo '<div class="alert alert-danger">
        <strong>ERROR!</strong>  La Nueva Contrasena  no puede tener menos de 8 caracteres o mas de 30 caracteres.
        </div>' ;
       } 

       else if($Rcontrasena1 != $Rcontrasena2){  
        echo '<div class="alert alert-danger">
        <strong>ERROR!</strong>  Las contraseñas no coinciden.
        </div>';
       }else {
        $encriNuevaContrasena = md5($Rcontrasena1);
        $obj = new recuperarContrasena();
        $obj->actualizarContrasena($encriNuevaContrasena,$codigo);
        echo 1;

       }



}


?>