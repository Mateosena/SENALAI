
<?php
require_once('../conexion.php');
require_once('../modelo/administrarUsuarios.php');
require_once('../modelo/registroUsuario.php');



// VALIDACIONDES DEL NUEVO NOMBRE

if (isset($_POST['nuevonombre']) && isset($_POST['documento']) ) {

$Nuevonombre = $_POST['nuevonombre']; 
$documento = $_POST['documento'];

if($Nuevonombre == "" ){ 
        
        
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong>  El  Nombre no puede ir vacio.
    </div>';
   }
//NO cumple longitud  
   else if(strlen($Nuevonombre) > 40 ){  
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong> El Nombre no puede ser mayor de 40 caracteres.
    </div>'; 
   }
   //SI longitud pero NO solo caracteres A-z  
   else if(!preg_match("/^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$/", $Nuevonombre)){  
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong> El Nombre, debe tener letras  y pueder haber espacios. 
    </div>';
   }else{
    $obj = new administrarUsuarios();
    $obj->cambiarNombre($Nuevonombre,$documento);
    echo 1;
   }

}


// VALIDACIONDES DEL NUEVO DOCUMENTO

if (isset( $_POST['nuevodocumento']) &&  isset( $_POST['documento'])  ) {
    
$NuevoDocumento = $_POST['nuevodocumento'];
$documento = $_POST['documento'];


$obj = new registroUsuario();
$j=$obj->validardocumentoexiste($documento);


if($NuevoDocumento == "" ){   
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong>  El campo Documento no puede ir vacio.
    </div>'; 
   }
   //NO cumple longitud minima  
   else if(strlen($NuevoDocumento) > 30 ){  
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong>  El campo Documento no puede  ser mayor de 30 caracteres.
    </div>';
   }
   //SI longitud pero NO solo caracteres A-z  
   else if(!preg_match("/^[0-9]+$/",$NuevoDocumento)){  
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong>  El campo Documento solo debe contener  numeros.
    </div>';
   }
   
   else if($j > 0){
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong>  El Documento ya ha sido registrado.
      </div>';
     } 
   else{
    $obj = new administrarUsuarios();
    $obj->cambiarDocumento($NuevoDocumento,$documento);
    echo 1;
    
   }

}

// VALIDACIONDES DEL NUEVO PRIMER APELLIDO

if (isset($_POST['nuevoPrimerApellido']) &&  isset($_POST['documento']) ) {

   $apellido_primero = $_POST['nuevoPrimerApellido'];
   $documento = $_POST['documento'];

    if($apellido_primero == "" ) { 
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong>  El campo Primer Apellido no puede ir vacio.
      </div>';
     }

     //NO cumple longitud minima  
     else if(strlen($apellido_primero) > 20 ){  
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong> El campo Primer Apellido no puede ser mayor de 20 caracteres.
      </div>'; 
     } 
     //SI longitud pero NO solo caracteres A-z  
     else if(!preg_match("/^[a-zA-Z]+$/",$apellido_primero)){  
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong> El campo Primer Apellido solo debe tener letras y no pueden haber espacios.
      </div>'; 
     }else{
      $obj = new administrarUsuarios();
      $obj->cambiarPrimerApellido($apellido_primero,$documento);
      echo 1;
     }
}

// VALIDACIONDES DEL NUEVO TIPO DOCUMENTO

if (isset($_POST['tipodocumento']) &&  isset($_POST['documento']) ) {

   $tipodocumento = $_POST['tipodocumento'];
   $documento = $_POST['documento'];


      $obj = new administrarUsuarios();
      $obj->cambiarTipodocumento($tipodocumento,$documento);
      echo 1;
     
}

// VALIDACIONDES DEL NUEVO SEGUNDO APELLIDO


if (isset($_POST['nuevoSegundoApellido']) &&  isset($_POST['documento']) ) {

   $nuevoSegundoApellido = $_POST['nuevoSegundoApellido'];
   $documento = $_POST['documento'];


     
     if(strlen($nuevoSegundoApellido) > 20 ){  
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong> El campo Segundo Apellido no puede ser mayor de 20 caracteres.
      </div>';  
     } 
     //SI longitud pero NO solo caracteres A-z  
     else if(!preg_match("/[A-Za-z]/",$nuevoSegundoApellido) && $nuevoSegundoApellido !="" ){  
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong> El campo Segundo apellido solo debe tener letras o debe estar vacio.
      </div>'; 
     }
      else{
      $obj = new administrarUsuarios();
      $obj-> cambiarSegundoApellido($nuevoSegundoApellido,$documento);
      echo 1;
   }
}









// VALIDACIONDES DEL NUEVO SEGUNDO APELLIDO


if (isset($_POST['nuevoDireccion']) &&  isset($_POST['documento']) ) {

   $nuevoDireccion = $_POST['nuevoDireccion'];
   $documento = $_POST['documento'];


     
   if($nuevoDireccion == "" ){   
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong>  El campo Direccion no puede ir vacio.
      </div>'; 
     }
     //NO cumple longitud minima  
     else if(strlen($nuevoDireccion) > 30 ){  
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong>  El campo Direccion no puede  ser mayor de 30 caracteres.
      </div>';
     }
      else{
      $obj = new administrarUsuarios();
      $obj-> cambiarDireccion($nuevoDireccion,$documento);
      echo 1;
   }
}



// VALIDACIONDES DEL NUEVO NUMERO CELULAR


if (isset($_POST['nuevoNumeroCelular']) &&  isset($_POST['documento']) ) {

   $nuevoNumeroCelular = $_POST['nuevoNumeroCelular'];
   $documento = $_POST['documento'];


     
    if($nuevoNumeroCelular == "" ){   
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong>  El campo Celular no puede ir vacio.
      </div>'; 
     }


    // solo caracteres numericos  
      else if(!preg_match("/^[0-9]+$/",$nuevoNumeroCelular)){  
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong>  El campo Celular debe contener solo numeros y no pueden haber espacios.
      </div>';
    } 

     //NO cumple longitud  
     else if(strlen($nuevoNumeroCelular) != 10 ){  
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong>  El campo Celular debe tener 10 numeros.
      </div>';
     }
      else{
      $obj = new administrarUsuarios();
      $obj->cambiarNumeroCelular($nuevoNumeroCelular,$documento);
      echo 1;
   }
}



// VALIDACIONDES DEL NUEVO TELEFONO


if (isset($_POST['nuevoTelefono']) &&  isset($_POST['documento']) ) {

   $nuevoTelefono = $_POST['nuevoTelefono'];
   $documento = $_POST['documento'];


     // solo caracteres numericos  y vacio 
      if(!preg_match("/^[0-9]+$/",$nuevoTelefono) && $nuevoTelefono !=""){  
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong>  El campo Tel fijo  debe contener solo numeros o debe estar vacio.
      </div>';
       }



      //NO cumple longitud  
      else if(strlen($nuevoTelefono) != 7 && $nuevoTelefono !="" ){  
       echo '<div class="alert alert-danger">
       <strong>ERROR!</strong>  El campo Tel  FIjo debe tener los 7 digitos o puede ir vacio.
       </div>';
      }
      else{
      $obj = new administrarUsuarios();
      $obj->cambiarTelefono($nuevoTelefono,$documento);
      echo 1;
   }
}








//VALIDACIONES DEL  EMAIL


if (isset($_POST['nuevoEmail']) &&  isset($_POST['documento']) ) {

            $nuevoEmail = $_POST['nuevoEmail'];
            $documento = $_POST['documento'];

            $obj = new registroUsuario();
            $a=$obj->validaremailexiste($nuevoEmail);
            
         if(strlen($nuevoEmail) == 0){ 
            echo '<div class="alert alert-danger">
            <strong>ERROR!</strong>  El campo email no puede ir vacio.
            </div>';
         }   
         // SI escrito, NO VALIDO email  
         else if(!preg_match("/^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i",$nuevoEmail)){ 
         echo '<div class="alert alert-danger">
         <strong>ERROR!</strong>  Debe ingresar un Email valido.
         </div>';   
         }  

         //---- VALIDACIONES DEL  EMAIL(VALIDAR QUE EL EMAIL NO EXISTA EN LA BASE DE DATOS)----- ///      


         //Comprovar si email existe 
         else if($a > 0){
            echo '<div class="alert alert-danger">
            <strong>ERROR!</strong>  El email ya ha sido registrado, intenta con otro.
            </div>';
         } 


         else{
         $obj = new administrarUsuarios();
         $obj->cambiarEmail($nuevoEmail,$documento);
         echo 1;
   }
}




// VALIDACIONDES DEL NUEVO SEXO

if (isset($_POST['nuevoSexo']) &&  isset($_POST['documento']) ) {

         $nuevoSexo = $_POST['nuevoSexo'];
         $documento = $_POST['documento'];


            $obj = new administrarUsuarios();
            $obj->cambiarSexo($nuevoSexo,$documento);
            echo 1;
     
}


// VALIDACIONDES DEL NUEVO PROGRAMA

if (isset($_POST['nuevoPrograma']) &&  isset($_POST['documento']) ) {

   $nuevoPrograma = $_POST['nuevoPrograma'];
   $documento = $_POST['documento'];


      $obj = new administrarUsuarios();
      $obj->cambiarPrograma($nuevoPrograma,$documento);
      echo 1;

}

// VALIDACIONDES DEL NUEVA FICHA

if (isset($_POST['nuevoFicha']) &&  isset($_POST['documento']) ) {

   $nuevoFicha = $_POST['nuevoFicha'];
   $documento = $_POST['documento'];


    if(!preg_match("/^[0-9]+$/",$nuevoFicha) && $nuevoFicha !=""){  
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong>  El Campo Numero Ficha debe contener solo numeros o debe estar vacio.
      </div>';
       }


      $obj = new administrarUsuarios();
      $obj->cambiarFicha($nuevoFicha,$documento);
      echo 1;

}

// VALIDACIONDES DEL NUEVA CIUDAD


if (isset($_POST['nuevoCiudad']) &&  isset($_POST['documento']) ) {

   $nuevoCiudad = $_POST['nuevoCiudad'];
   $documento = $_POST['documento'];


   

      $obj = new administrarUsuarios();
      $obj->cambiarCiudad($nuevoCiudad,$documento);
      echo 1;

}


// VALIDACIONES DEL NUEVO USUARIO


if (isset($_POST['nuevoUsuario']) &&  isset($_POST['documento']) ) {

   $nuevoUsuario = $_POST['nuevoUsuario'];
   $documento = $_POST['documento'];

   $obj = new registroUsuario();
   $d=$obj->validarusuarioexiste($nuevoUsuario);

   if($nuevoUsuario == "" )  {
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong>  El campo Usuario no puede ir vacio.
      </div>'; 
     }
     
     //NO cumple longitud   
     else if(strlen($nuevoUsuario) < 5 || strlen($nuevoUsuario) >20 ){ 
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong> El usuario no puede tener menos de 5 caracteres o mas de 20 caracteres.
      </div>';
     } 
     //SI longitud pero NO solo caracteres A-z  
     else if(!preg_match("/^[0-9a-zA-Z]+$/",$nuevoUsuario)) {
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong> El campo usuario solo debe tener letras y numeros.
      </div>'; 
     } 
    

     
     //Comprovar si usuario existe 
     else if($d > 0){
      echo '<div class="alert alert-danger">
      <strong>ERROR!</strong>  El usuario ya ha sido registrado, intenta con otro.
      </div>';
     } else{
   

      $obj = new administrarUsuarios();
      $obj->cambiarUsuario($nuevoUsuario,$documento);
      echo 1;
   }
}



// VALIDACIONES DEL NUEVO ROL


if (isset($_POST['nuevoRol']) &&  isset($_POST['documento']) ) {

   $nuevoRol = $_POST['nuevoRol'];
   $documento = $_POST['documento'];


   

      $obj = new administrarUsuarios();
      $obj->cambiarRol($nuevoRol,$documento);
      echo 1;

}













