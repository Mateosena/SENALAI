
<?php

if ( $_SESSION['usuario'] ==""  and  $_SESSION['contrasena'] =="" || $_SESSION['Roles_idRoles'] != 4 ) {
	header('Location:../index.php');
	die();
 
}


?>

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
	  
	<h2 style="text-align: center;">Cambiar Datos</h2>
	
	

	

	<hr style=" height: 1px;
  background-color: black;s" />








<div class="form-group">
		<label style="font-size:18px;" for=""> Tipo Documento: <?php echo $valores['Tipo_Documento'];?> </label>   &nbsp; <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarTipoDocumento" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div> 

<div class="form-group">
		<label style="font-size:18px;" for=""> Documento: <?php echo $valores['Numero_Documento'];  ?></label> &nbsp;   <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarDocumento" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div> 
	
		<div class="form-group">
		<label style="font-size:18px;" for=""> Nombres: <?php echo $valores['Nombre'];?> </label>   &nbsp; <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarNombre" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div> 

            <div class="form-group">
		<label style="font-size:18px;" for=""> Primer Apellido: <?php echo $valores['Apellido_Primero'];?> </label>   &nbsp; <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarPrimerApellido" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div> 

            <div class="form-group">
		<label style="font-size:18px;" for=""> Segundo Apellido: <?php echo $valores['Apellido_Segundo'];?> </label>   &nbsp; <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarSegundoApellido" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div> 

            <div class="form-group">
		<label style="font-size:18px;" for=""> Direccion: <?php echo $valores['Direccion'];?> </label>   &nbsp; <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarDireccion" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div> 

            <div class="form-group">
		<label style="font-size:18px;" for=""> Celular: <?php echo $valores['Numero_Celular'];?> </label>   &nbsp; <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarNumeroCelular" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div> 

            <div class="form-group">
		<label style="font-size:18px;" for=""> Tel Fijo: <?php echo $valores['Telefono'];?> </label>   &nbsp; <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarTelefono" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div> 
            <div class="form-group">
		<label style="font-size:18px;" for=""> Email: <?php echo $valores['Email'];?> </label>   &nbsp; <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarEmail" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div> 

            <div class="form-group">
		<label style="font-size:18px;" for=""> Sexo: <?php echo $valores['NombreSexo'];?> </label>   &nbsp; <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarSexo" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div> 

            <div class="form-group">
		<label style="font-size:18px;" for=""> Programa: <?php echo $valores['NombrePrograma'];?> </label>   &nbsp; <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarPrograma" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div> 

            <div class="form-group">
		<label style="font-size:18px;" for=""> Ficha: <?php echo $valores['Numero_Ficha'];?> </label>   &nbsp; <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarFicha" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div> 

            <div class="form-group">
		<label style="font-size:18px;" for=""> Ciudad: <?php echo $valores['NombreCiudad'];?> </label>   &nbsp; <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarCiudad" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div>

            <div class="form-group">
		<label style="font-size:18px;" for=""> Usuario: <?php echo $valores['Usuario'];?> </label>   &nbsp; <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarUsuario" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div>

            <div class="form-group">
		<label style="font-size:18px;" for=""> Rol: <?php echo $valores['NombreRoles'];?> </label>   &nbsp; <span  style="font-size:20px; color:rgb(235,111,13);"  id="cambiarRol" class="glyphicon glyphicon-pencil"></span>  </label>
				
            </div>  


     



  
               
	</form>





</div>




<!-- MODAL CAMBIAR TIPO DOCUMENTO ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarTipoDocumento" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarTipoDocumento">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Tipo Documento</h2>
        </div>
        <div class="modal-body">
        
        <label>Seleccione un nuevo tipo de documento:</label>
<select class='form-control' id='tipodocumento' name='tipodocumento'>

<?php while($resultado = mysqli_fetch_array($consultartipodocumento)){ ?>


 <option value="<?php echo $resultado['idTipo_Documento']; ?>"> <?php echo $resultado['Tipo_Documento']; ?> </option>


<?php } ?>

</select>


				<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarTipoDocumento"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarTipoDocumento"  class="btn btn-primary">Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $valores['Numero_Documento'] ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO CAMBIAR TIPO DOCUMENTO ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarTipoDocumento" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Documento cambiado correctamente debes regresar Administrar Usuarios</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				        
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div>






<!-- MODAL CAMBIAR DOCUMENTO ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarDocumento" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarDocumento">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Documento</h2>
					<p>ALERTA: Si cambias el documento de un usuario debes regresar al modulo Administrar usuarios</p>
        </div>
        <div class="modal-body">
        
				<input type="text" name="nuevodocumento" id="nuevodocumento" value="<?php echo $valores['Numero_Documento'];?>" class="form-control " placeholder="" tabindex="3" >
				<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarDocumento"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarDocumento"  class="btn btn-primary">Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $valores['Numero_Documento'] ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO CAMBIAR DOCUMENTO ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarDocumento" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Documento cambiado correctamente debes regresar Administrar Usuarios</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				<a href="administrarUsuarios.php" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div>











<!-- MODAL CAMBIAR NOMBRE ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarNombre" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarNombre">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Nombre</h2>
        </div>
        <div class="modal-body">
        
				<input type="text" name="nuevonombre" id="nuevonombre" value="<?php echo $valores['Nombre'];?>" class="form-control " placeholder="" tabindex="3" >
				<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarNombre"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarNombre"  class="btn btn-primary">Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO CAMBIAR NOMBRE ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarNombre" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Nombre cambiado correctamente</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div> 







  <!-- MODAL CAMBIAR PRIMER APELLIDO ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarPrimerApellido" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarPrimerApellido">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Primer Apellido</h2>
        </div>
        <div class="modal-body">
        
				<input type="text" name="nuevoPrimerApellido" id="nuevonombre" value="<?php echo $valores['Apellido_Primero'];?>" class="form-control " placeholder="" tabindex="3" >
				<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarPrimerApellido"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarPrimerApellido"  class="btn btn-primary" >Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO CAMBIAR PRIMER APELLIDO ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarPrimerApellido" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Primer Apellido cambiado correctamente</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div>




    <!-- MODAL CAMBIAR SEGUNDO APELLIDO ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarSegundoApellido" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarSegundoApellido">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Segundo Apellido</h2>
        </div>
        <div class="modal-body">
        
				<input type="text" name="nuevoSegundoApellido" id="nuevoSegundoApellido" value="<?php echo $valores['Apellido_Segundo'];?>" class="form-control " placeholder="" tabindex="3" >
				<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarSegundoApellido"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarSegundoApellido"  class="btn btn-primary" >Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO CAMBIAR SEGUNDO APELLIDO ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarSegundoApellido" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Segundo Apellido cambiado correctamente</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div>



    <!-- MODAL CAMBIAR DIRECCION ---->
    <div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarDireccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarDireccion">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Direccion</h2>
        </div>
        <div class="modal-body">
        
				<input type="text" name="nuevoDireccion" id="nuevoDireccion" value="<?php echo $valores['Direccion'];?>" class="form-control " placeholder="" tabindex="3" >
				<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarDireccion"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarDireccion"  class="btn btn-primary" >Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO CAMBIAR DIRECCION---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarDireccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Direccion cambiada correctamente</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div>

      <!-- MODAL CAMBIAR NUMERO CELULAR ---->
      <div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarNumeroCelular" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarNumeroCelular">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Numero Celular</h2>
        </div>
        <div class="modal-body">
        
				<input type="text" name="nuevoNumeroCelular" id="nuevoNumeroCelular" value="<?php echo $valores['Numero_Celular'];?>" class="form-control " placeholder="" tabindex="3" >
				<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarNumeroCelular"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarNumeroCelular"  class="btn btn-primary" >Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO NUMERO CELULAR---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarNumeroCelular" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Numero Celular cambiado correctamente</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div>




        <!-- MODAL CAMBIAR TELEFONO ---->
        <div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarTelefono" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarTelefono">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Telefono</h2>
        </div>
        <div class="modal-body">
        
				<input type="text" name="nuevoTelefono" id="nuevoTelefono" value="<?php echo $valores['Telefono'];?>" class="form-control " placeholder="" tabindex="3" >
				<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarTelefono"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarTelefono"  class="btn btn-primary" >Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO CAMBIAR TELEFONO---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarTelefono" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Telefono cambiado correctamente</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div>




          <!-- MODAL CAMBIAR EMAIL ---->
          <div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarEmail">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Email</h2>
        </div>
        <div class="modal-body">
        
				<input type="text" name="nuevoEmail" id="nuevoEmail" value="<?php echo $valores['Email'];?>" class="form-control " placeholder="" tabindex="3" >
				<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarEmail"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarEmail"  class="btn btn-primary" >Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO CAMBIAR EMAIL ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Email cambiado correctamente</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div>





          <!-- MODAL CAMBIAR SEXO ---->
          <div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarSexo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarSexo">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Sexo</h2>
        </div>
        <div class="modal-body">
        
				                  


										<label>Selecciona un nuevo Sexo:</label>
<select class='form-control' id='nuevoSexo' name='nuevoSexo'>

<?php while($resultado = mysqli_fetch_array($consultarsexo)){ ?>


 <option value="<?php echo $resultado['idSexo'] ?>"> <?php echo $resultado['NombreSexo']; ?> </option>


<?php } ?>

</select>

<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">



					
			       
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarSexo"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarSexo"  class="btn btn-primary" >Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO CAMBIAR SEXO ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarSexo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Sexo cambiado correctamente</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div>









          <!-- MODAL CAMBIAR PROGRAM ---->
          <div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarPrograma" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarPrograma">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Programa</h2>
        </div>
        <div class="modal-body">
        
				                  


        <label>Seleccione un nuevo Programa:</label>
<select class='form-control' id='nuevoPrograma' name='nuevoPrograma'>  


<?php while($resultado = mysqli_fetch_array($consultarprograma)){ ?>


 <option value="<?php echo $resultado['idPrograma']; ?>"> <?php echo $resultado['NombrePrograma']; ?> </option>


<?php } ?>

</select>

<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">



					
			       
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarPrograma"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarPrograma"  class="btn btn-primary" >Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO CAMBIAR PROGRAMA ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarPrograma" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Programa cambiado correctamente</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div>







          <!-- MODAL CAMBIAR NUMERO FICHA ---->

          <div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarFicha" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarFicha">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Numero Ficha</h2>
        </div>
        <div class="modal-body">
        
				<input type="text" name="nuevoFicha" id="nuevoFicha" value="<?php echo $valores['Numero_Ficha'];?>" class="form-control " placeholder="" tabindex="3" >
				<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarEmail"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarFicha"  class="btn btn-primary" >Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO CAMBIAR NUMERO FICHA ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarFicha" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Numero Ficha cambiado correctamente</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div>








          <!-- MODAL CAMBIAR CIUDAD ---->
          <div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarCiudad" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarCiudad">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Ciudad</h2>
        </div>
        <div class="modal-body">
        
				                  


        <label>Seleccione una nueva ciudad:</label>
<select class='form-control' id='nuevociudad' name='nuevoCiudad'>  

<?php while($resultado = mysqli_fetch_array($consultarciudad)){ ?>


 <option value="<?php echo $resultado['idCiudad']; ?>"> <?php echo $resultado['NombreCiudad']; ?> </option>


<?php } ?>

</select>

<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">



					
			       
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarCiudad"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarCiudad"  class="btn btn-primary" >Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO CAMBIAR CIUDAD ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarCiudad" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Ciudad cambiada correctamente</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div>





          <!-- MODAL CAMBIAR USUARIO---->

          <div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarUsuario">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Usuario</h2>
        </div>
        <div class="modal-body">
        
				<input type="text" name="nuevoUsuario" id="nuevoUsuario" value="<?php echo $valores['Usuario'];?>" class="form-control " placeholder="" tabindex="3" >
				<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarUsuario"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarUsuario"  class="btn btn-primary" >Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO CAMBIAR USUARIO ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Usuario cambiado correctamente</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div>



            <!-- MODAL CAMBIAR ROL--->

            <div data-backdrop="static" data-keyboard="false" class="modal fade" id="modalCambiarRol" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        <form id="formularioCambiarRol">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">Cambiar Rol</h2>
        </div>
        <div class="modal-body">
        

        <label>Seleccionar un nuevo rol:</label>
<select class='form-control' id='nuevoRol' name='nuevoRol'>  

<?php while($resultado = mysqli_fetch_array($consultarrol)){ ?>


 <option value="<?php echo $resultado['idRoles']; ?>"> <?php echo $resultado['NombreRoles']; ?> </option>


<?php } ?>

</select>


				<input type="hidden" name="documento" id="documento" value="<?php echo $documento?>">
              
              
        </div>
        <img class="loading" id="loading" src="../vista/img/loading.gif" alt=""> <span id="mensajesCambiarRol"> </span>
        <div class="modal-footer">
        
          
        <a   id="submitCambiarRol"  class="btn btn-primary" >Aceptar</a>
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Cancelar</a>
				
        </div>
				
        </form>
  
      </div>
    </div>
  </div>


	<!-- MODAL EXITO CAMBIAR ROL ---->
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="exitoModalCambiarRol" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
  
      <div class="modal-content">
        
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">EXITO</h2>
        </div>
        <div class="modal-body">
        
				<p>Rol cambiado correctamente</p>
              
              
        </div>
        
        <div class="modal-footer">
        
          
        
				<a href="coordinadorEditarDatos.php?numero_documento=<?php echo $documento ?>" class="btn btn-primary">Aceptar</a>
        </div>
  
        
  
      </div>
    </div>
  </div>




<br>
<?php include('plantilla/footer.php')?>

    <script src="../vista//js/jquery-3.3.1.min.js"></script>
    <script src="../vista/js/bootstrap.min.js"></script>  
    <script src="../ajax/modalsCoordinadorEditarDatos.js"></script> 
    
</body>
</html>




