<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../phpmailer/Exception.php';
require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';


if (isset($_POST["envioRegistroUsuario"])){

sleep(2);



require_once('../conexion.php');
require_once('../modelo/registroUsuario.php');

     
    $nombres = $_POST['nombres'];
    $apellido_primero = $_POST['apellido_primero'];
    $apellido_segundo = $_POST['apellido_segundo'];
    $usuario = $_POST['usuario'];
    $rol = $_POST['rol'];
    $tipodocumento = $_POST['tipodocumento'];
    $documento = $_POST['documento'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $numero_celular = $_POST['numero_celular'];
    $telefono = $_POST['telefono'];
    $idprograma = $_POST['idprograma'];
    $numero_ficha = $_POST['numero_ficha'];



//Consulta para validar que el email no exista en nuestra base de datos//

$obj = new registroUsuario();
$f=$obj->validaremailexiste($email);

//----------fin consulta----------//



//Consulta para validar que el email no exista en nuestra base de datos//

$obj = new registroUsuario();
$y=$obj->validarusuarioexiste($usuario);

//----------fin consulta----------//



//Consulta para validar que el Documento no exista en nuestra base de datos//

$obj = new registroUsuario();
$j=$obj->validardocumentoexiste($documento);





//---- VALIDACIONES DEL NOMBRE----- ///
   
      //Si esta vacio  
        if($nombres == "" ){ 
        
        
         echo '<div class="alert alert-danger">
         <strong>ERROR!</strong>  El campo Nombres no puede ir vacio.
         </div>';
        }
     //NO cumple longitud  
        else if(strlen($nombres) > 40 ){  
         echo '<div class="alert alert-danger">
         <strong>ERROR!</strong> El campo Nombres no puede ser mayor de 40 caracteres.
         </div>'; 
        }
        //SI longitud pero NO solo caracteres A-z  
        else if(!preg_match("/^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$/", $nombres)){  
         echo '<div class="alert alert-danger">
         <strong>ERROR!</strong> El campo Nombres, debe tener letras acompañadas de espacios. 
         </div>';
        }

//---- VALIDACIONES DE LOS  APELLIDOS----- /// 
    
        else if($apellido_primero == "" ) { 
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
        }





       
               //NO cumple longitud minima  
               else if(strlen($apellido_segundo) > 20 ){  
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong> El campo Segundo Apellido no puede ser mayor de 20 caracteres.
                </div>';  
               } 
               //SI longitud pero NO solo caracteres A-z  
               else if(!preg_match("/[A-Za-z]/",$apellido_segundo) && $apellido_segundo !="" ){  
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong> El campo Segundo apellido solo debe tener letras o debe estar vacio.
                </div>'; 
               }



               
               //---- VALIDACIONES DEL USUARIO----- ///
        else if($usuario == "" )  {
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong>  El campo Usuario no puede ir vacio.
                </div>'; 
               }
               
               //NO cumple longitud   
               else if(strlen($usuario) < 5 || strlen($usuario) >20 ){ 
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong> El usuario no puede tener menos de 5 caracteres o mas de 20 caracteres.
                </div>';
               } 
               //SI longitud pero NO solo caracteres A-z  
               else if(!preg_match("/^[0-9a-zA-Z]+$/",$usuario)) {
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong> El campo usuario solo debe tener letras y numeros.
                </div>'; 
               } 
               // SI longitud, SI caracteres A-z
       
       
       //---- VALIDACIONES DEL USUARIO(VALIDAR QUE EL USUARIO NO ESTE EN NUESTRA BASE DE DATOS)----- ///
               
               //Comprovar si usuario existe 
               else if($y > 0){
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong>  El usuario ya ha sido registrado, intenta con otro.
                </div>';
               } 



               //---- VALIDACIONES DEL DOCUMENTO----- /// 
        else if($documento == "" ){   
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong>  El campo Documento no puede ir vacio.
                </div>'; 
               }
               //NO cumple longitud minima  
               else if(strlen($documento) > 30 ){  
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong>  El campo Documento no puede  ser mayor de 30 caracteres.
                </div>';
               }
               //SI longitud pero NO solo caracteres A-z  
               else if(!preg_match("/^[0-9]+$/",$documento)){  
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong>  El campo Documento solo debe contener  numeros.
                </div>';
               }

               else if($j > 0){
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong>  El Documento ya ha sido registrado.
                </div>';
               } 




               //---- VALIDACIONES DE LA DIRECCION----- /// 
        else if($direccion == "" ){   
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong>  El campo Direccion no puede ir vacio.
                </div>'; 
               }
               //NO cumple longitud minima  
               else if(strlen($direccion) > 30 ){  
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong>  El campo Direccion no puede  ser mayor de 30 caracteres.
                </div>';
               }







 //---- VALIDACIONES DEL  EMAIL----- ///  
        else if(strlen($email) == 0){ 
         echo '<div class="alert alert-danger">
         <strong>ERROR!</strong>  El campo email no puede ir vacio.
         </div>';
        }   
        // SI escrito, NO VALIDO email  
        else if(!preg_match("/^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i",$email)){ 
        echo '<div class="alert alert-danger">
        <strong>ERROR!</strong>  Debe ingresar un Email valido.
        </div>';   
        }  
 
 //---- VALIDACIONES DEL  EMAIL(VALIDAR QUE EL EMAIL NO EXISTA EN LA BASE DE DATOS)----- ///      


       //Comprovar si email existe 
        else if($f > 0){
         echo '<div class="alert alert-danger">
         <strong>ERROR!</strong>  El email ya ha sido registrado, intenta con otro.
         </div>';
        } 


       

        //---- VALIDACIONES DEl CELULAR----- /// 
        else if($numero_celular == "" ){   
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong>  El campo Celular no puede ir vacio.
                </div>'; 
               }


              // solo caracteres numericos  
                else if(!preg_match("/^[0-9]+$/",$numero_celular)){  
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong>  El campo Celular debe contener solo numeros y no pueden haber espacios.
                </div>';
              } 

               //NO cumple longitud  
               else if(strlen($numero_celular) != 10 ){  
                echo '<div class="alert alert-danger">
                <strong>ERROR!</strong>  El campo Celular debe tener 10 numeros.
                </div>';
               }
 
              








//---- VALIDACIONES DEL TELEFONO----- /// 

   


          // solo caracteres numericos  
             else if(!preg_match("/^[0-9]+$/",$telefono) && $telefono !=""){  
              echo '<div class="alert alert-danger">
              <strong>ERROR!</strong>  El campo Tel fijo  debe contener solo numeros o debe estar vacio.
              </div>';
               }

        //NO cumple longitud  
        else if(strlen($telefono) != 7 && $telefono !="" ){  
         echo '<div class="alert alert-danger">
         <strong>ERROR!</strong>  El campo Tel  FIjo debe tener los 7 digitos o puede ir vacio.
         </div>';
        }
   



//---- VALIDACIONES DEL NUMERO FICHA----- ///
        
          
          else if(!preg_match("/^[0-9]+$/",$numero_ficha) && $numero_ficha !=""){  
              echo '<div class="alert alert-danger">
              <strong>ERROR!</strong>  El Campo Numero Ficha debe contener solo numeros o debe estar vacio.
              </div>';
               }



        
 //---- REGISTRAR USUARIO CORRECTAMENTE----- /// 
 
 
       else {

       
    

       $obj = new registroUsuario();
       $obj->ingresarusuario($nombres,$apellido_primero,$apellido_segundo,$usuario,$rol,$tipodocumento,$documento,$ciudad,$direccion,$email,$sexo,$numero_celular,$telefono,$idprograma,$numero_ficha);
       
       $mail = new PHPMailer(true); 

       // Passing `true` enables exceptions
       try {
           //Server settings
           $mail->SMTPDebug = 0;                                 // Enable verbose debug output
           $mail->isSMTP();                                      // Set mailer to use SMTP
           $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
           $mail->SMTPAuth = true;                               // Enable SMTP authentication
           $mail->Username = 'senalai31@gmail.com';                 // SMTP username
           $mail->Password = 'colonbia123';                          // SMTP password
           $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
           $mail->Port = 587;                                    // TCP port to connect to
       
           //Recipients
           $mail->setFrom('mate2801@gmail.com', 'Sena L.A.I');
           $mail->addAddress($email, 'APREDNDIZ');     // Add a recipient
       
           $message  = "<html><body>";
          
           $message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
              
           $message .= "<tr><td>";
              
           $message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
               
           $message .= "<thead>
             <tr height='80'>
             <th colspan='4' style='background-color:rgb(235,111,13); border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:34px;' >Sena L.A.I</th>
             </tr>
                        </thead>";
               
           $message .= "<tbody>
                        <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
                  <td style='background-color:fff; text-align:center;'><h1 style='color:black'; >hola aprendiz, ".$nombres."</td>
       
                  </tr>
                 
                  <tr>
                  <td colspan='4' style='padding:15px;'>
                  <p style='font-size:20px;'>CUENTA CREADA SATISFACTORIAMENTE</p>
                  <hr />
                  <p style='font-size:25px;'>Tus datos son:</p>
                  <p style='font-size:25px;'>Usuario: ".$usuario."</p>
                  <p style='font-size:25px;'>contraseña: Es el numero de tu documento</p>
                  <p style='font-size:25px;'>ALERTA: POR FAVOR ACTUALIZA TU CONTRASEÑA LO MAS PRONTO POSIBLE</p>
                  
                 
                  </td>
                  </tr>
                 
                         </tbody>";
               
           $message .= "</table>";
              
           $message .= "</td></tr>";
           $message .= "</table>";
              
           $message .= "</body></html>";
           //Content
           $mail->isHTML(true);                                  // Set email format to HTML
           $mail->Subject = 'asunto importante';
           $mail->Body   = $message ;
          
           $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
       
           $mail->send();
           
           echo 1;
           
       } catch (Exception $e) {
           echo 'no se envio error: ', $mail->ErrorInfo;
       }
    
 

   
}
 

}

?> 