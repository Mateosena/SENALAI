




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



   
    <link rel="stylesheet" href="../vista/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vista/css/bootstrap.css">
    <link rel="stylesheet"  type="text/css" href="../vista/css/login.css">
    <link rel="stylesheet"  type="text/css" href="../vista/css/header.css">
  <link rel="stylesheet"  type="text/css" href="../vista/css/footer.css">


    <title>Sena L.A.I</title>
</head>

<body>

<!-- header -->

<?php include('plantilla/header.php') ?>





<!-- Formulario de actualizar datos -->



<div class="container">

  <form class="form"  id="formularioActualizarContrasena"  >
    
  <h2 style="text-align: center;">Actualizar Contraseña</h2>
    <br>
  

                <div class="form-group">
      <label for="">Contraseña actual</label>
        <input type="password" name="contrasenaActual" id="contrasenaActual" class="form-control input-lg" placeholder="Ingrese contraseña actual" tabindex="3" >
      </div> 
      
        
           <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          
                    <div class="form-group">
          <label for="">Nueva Contraseña</label>
                <input type="password" name="nuevaContrasena" id="nuevaContrasena" class="form-control input-lg" placeholder="ingrese contraseña" tabindex="3" >
              </div>
                      
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
                     
              <div class="form-group">
          <label for="">Repite contraseña</label>
                <input type="password" name="nuevaContrasena2" id="nuevaContrasena2" class="form-control input-lg" placeholder="Repita contraseña" tabindex="3" >
              </div>
                      
        </div>
         </div>
     
     <hr/>
            
      <div class="row">
        <div  class="col-xs-6 col-md-6">
         <input type="hidden" name="envioActualizarContrasena">

                  <input id="submitActualizarContrasena" name="submitActualizarContrasena" type="button" value="Aceptar" class="btn btn-primary btn-block btn-lg" tabindex="7" >


        
                
                </div>

        <div  class="col-xs-6 col-md-6">
        <a href="bienvenido.php" class="btn btn-primary btn-block btn-lg">Cancelar</a>
        </div>
      </div>
    
      <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajeActualizarContrasena"> </span>
      
               
  </form>



</div>




<!-- MODAL exito ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalExiotActualizarContrasena" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="verificarcontrasena">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Exito</h2>
        </div>
        <div class="modal-body">
        
              <p for="">*Su contraseña ha sido cambiada Correctamente </p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        <a href="bienvenido.php" class="btn btn-primary">Aceptar</a>
        </div>
  
        </form>
  
      </div>
    </div>
  </div>


<br>
<br>
<br>


    <?php include('plantilla/footer.php')?>

    <script src="../vista/js/jquery-3.3.1.min.js"></script>
    <script src="../vista/js/bootstrap.min.js"></script>  
    <script src="../ajax/validarActualizarContrasena.js"></script>
    
</body>
</html>

