<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../phpmailer/Exception.php';
require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';

require('../conexion.php');
require('../modelo/recuperarContrasena.php');


$email = $_POST['email'];


$obj = new recuperarContrasena();
$f = $obj->validarEmailRecuperarContrasena($email);





 //---- VALIDACIONES DEL  EMAIL----- ///  
  if(strlen($email) == 0){ 
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
  $codigo = createRandomcode();
  $fechaRecuperacion = date("Y-m-d H:i:s", strtotime('+24 hours'));

  $obj->datosRecuperacion($codigo,$email,$fechaRecuperacion);

  
    

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
        $message  .= "<meta charset='UTF-8'>";
       
       
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
               <td style='background-color:fff; text-align:center;'><h1 style='color:black'; >hola aprendiz, ".$f['Nombre']."</td>
    
               </tr>
              
               <tr>
               <td colspan='4' style='padding:15px;'>
               <p style='font-size:20px;'>RECUPERACION DE CONTRASEÑA </p>
               <hr />
               <p style='font-size:25px;'>ingresa al siguiente link para cambiar tu contraseña</p>
               <p style='font-size:25px;'>http://localhost/SENALAI/controlador/recuperarContrasena.php?codigo=".$codigo."</p>

               
              
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


   } else{
    echo '<div class="alert alert-danger">
    <strong>ERROR!</strong> No hay ninguna cuenta asociada con este correo .
    </div>';
   }


   function createRandomcode() { 

    $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= 7) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 

    return time().$pass; 

}

?>