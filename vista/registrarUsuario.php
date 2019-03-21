




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



   
    <link rel="stylesheet" href="../vista/css/bootstrap.min.css">
	<link rel="stylesheet" href="../vista/css/bootstrap.css">
	
  <link rel="stylesheet"  type="text/css" href="../vista/css/login.css">
	<link rel="stylesheet"  type="text/css" href="../vista/css/footer.css">
	<link rel="stylesheet"  type="text/css" href="../vista/css/header.css">

    <title>Sena L.A.I</title>
</head>

<body>



<?php  require('plantilla/header.php')  ?>


<div class="container">

	<form class="form"  id="formularioRegistroUsuario"  >
	  
	<h2 style="text-align: center;">Registro de usuario</h2>
	

	

	<hr style=" height: 1px;
  background-color: black;s" />











	
		<div class="form-group">
			 <label for="">Nombres</label>
				<input type="text" name="nombres" id="nombres" class="form-control " placeholder="" tabindex="3" >
            </div> 
	
    <div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6">
					
					  <div class="form-group">
					  <label for="">Primer Apellido</label>
                          <input type="text" name="apellido_primero" id="apellido_primero" class="form-control " placeholder="" tabindex="1" >
                      </div>
                      
				</div>

				<div class="col-xs-6 col-sm-6 col-md-6">
                     
                        <div class="form-group">
						<label for="">Segundo Apellido</label>
						  <input type="text" name="apellido_segundo" id="apellido_segundo" class="form-control " placeholder="" tabindex="2" >
                        </div>
                      
				</div>
	</div>









	<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6">
					
				<div class="form-group">
						<label for="">Usuario</label>
				<input type="text" name="usuario" id="usuario" class="form-control " placeholder="" tabindex="3" >
                      </div>
                      
				</div>

				<div class="col-xs-6 col-sm-6 col-md-6">
                     
			        <div class="form-group">

							<label>Rol</label>
<select class='form-control' id='rol' name='rol'>  

<?php while($resultado = mysqli_fetch_array($consultarrol)){ ?>


 <option value="<?php echo $resultado['idRoles']; ?>"> <?php echo $resultado['NombreRoles']; ?> </option>


<?php } ?>

</select>

					
			        </div>
                      
				</div>
	 </div>














	<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6">
					
					  <div class="form-group">


						<label>Tipo documento</label>
<select class='form-control' id='tipodocumento' name='tipodocumento'>

<?php while($resultado = mysqli_fetch_array($consultartipodocumento)){ ?>


 <option value="<?php echo $resultado['idTipo_Documento']; ?>"> <?php echo $resultado['Tipo_Documento']; ?> </option>


<?php } ?>

</select>


						
                      </div>
                      
				</div>

				<div class="col-xs-6 col-sm-6 col-md-6">
                     
                        <div class="form-group">
												<label for="">Documento</label>
				<input type="text" name="documento" id="documento" class="form-control " placeholder=" " tabindex="3" >
                        </div>
                      
				</div>
	</div>











	<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6">
					
                    <div class="form-group">


										<label>Sexo</label>
<select class='form-control' id='sexo' name='sexo'>

<?php while($resultado = mysqli_fetch_array($consultarsexo)){ ?>


 <option value="<?php echo $resultado['idSexo']; ?>"> <?php echo $resultado['NombreSexo']; ?> </option>


<?php } ?>

</select>



					
			        </div>
                      
				</div>

				<div class="col-xs-6 col-sm-6 col-md-6">
                     
			        <div class="form-group">


							<label>ciudad</label>
<select class='form-control' id='ciudad' name='ciudad'>  

<?php while($resultado = mysqli_fetch_array($consultarciudad)){ ?>


 <option value="<?php echo $resultado['idCiudad']; ?>"> <?php echo $resultado['NombreCiudad']; ?> </option>


<?php } ?>

</select>


					
			        </div>
                      
				</div>
	 </div>






	 <div class="form-group">
			 <label for="">Direccion</label>
				<input type="text" name="direccion" id="direccion" class="form-control " placeholder=" " tabindex="3" >
            </div> 














             <div class="form-group">
			 <label for="">Email</label>
				<input type="email" name="email" id="email" class="form-control " placeholder=" " tabindex="3" >
            </div> 
            
	









     



















						<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6">
					
					  <div class="form-group">
						<label for="">Celular </label>
				<input type="text" name="numero_celular" id="numero_celular" class="form-control " placeholder=" " tabindex="3" >
                      </div>
                      
				</div>

				<div class="col-xs-6 col-sm-6 col-md-6">
                     
                        <div class="form-group">
												<label for="">Tel Fijo</label>
				<input type="text" name="telefono" id="telefono" class="form-control " placeholder=" " tabindex="3" >
                        </div>
                      
				</div>
	</div>




	<p style="text-align: center;">Nota:Los Siguientes Campos son Requeridos para el Aprendiz</p>




	<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6">


        <label>Programa</label>
<select class='form-control' id='idprograma' name='idprograma'>  


<?php while($resultado = mysqli_fetch_array($consultarprograma)){ ?>


 <option value="<?php echo $resultado['idPrograma']; ?>"> <?php echo $resultado['NombrePrograma']; ?> </option>


<?php } ?>

</select>

                      
				</div>

				<div class="col-xs-6 col-sm-6 col-md-6">
                     
				

				<div class="form-group">
												<label for="">Numero Ficha</label>
				<input type="text" name="numero_ficha" id="numero_ficha" class="form-control " placeholder=" " tabindex="3" >
                        </div>


                      
				</div>
	 </div>












      
        
 

		   



            <hr/>
            


			<div class="row">
				<div  class="col-xs-6 col-md-6">

				 <input type="hidden" name="envioRegistroUsuario">

				   <input id="submit" name="submit" type="button" value="Registrarse" class="btn btn-primary btn-block btn-lg" tabindex="7" >
				</div>

				<div  class="col-xs-6 col-md-6">
				<a href="index.php" class="btn btn-primary btn-block btn-lg">Cancelar</a>
				</div>
			</div>
		
			<div id ="alert"><img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajes"> </span></div>
      
               
	</form>



</div>

<!-- MODAL exito AL REGISTRAR USUARIO ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalExitoRegistroUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="verificarcontrasena">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Usuario Registrado con Exito</h2>
        </div>
        <div class="modal-body">
        
              <p for="">Se han enviado los datos del usuario a la direcion de correo del mismo.</p>
              
              
        </div>
        
        <div class="modal-footer">
				
        <img class="loading" id="loading" src="vista/img/loading.gif" alt=""> <span id="mensajes"> </span>
          
        <a href="registrarUsuario.php" class="btn btn-primary">Aceptar</a>
        </div>
  
        </form>
  
      </div>
    </div>
  </div>



<br>
<br>
<br>
<?php include('plantilla/footer.php')?>

    <script src="../vista//js/jquery-3.3.1.min.js"></script>
    <script src="../vista/js/bootstrap.min.js"></script>  
	<script src="../ajax/validarRegistroUsuario.js"></script>
    
</body>
</html>



