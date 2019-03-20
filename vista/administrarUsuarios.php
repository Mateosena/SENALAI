

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
    <link rel="stylesheet"  type="text/css" href="../vista/css/tableUsuario.css">
    

    <title>Sena L.A.I</title>
</head>

<body>



<?php  require('plantilla/header.php')  ?>
<br><br>









<section class="principal">

	<h1 style="text-align:center">Administrar Usuarios</h1>
    <p  style="text-align:center" for="">Nota: buscar por documento,Email,Programa,Ficha,Ciudad,Usuario</p>
	<div class="formulario">
    
        <div class="col-md-4 col-md-offset-4 text-center">
        <input type="text" class="form-control buscador" name="caja_busqueda" id="caja_busqueda" placeholder="BUSCAR" >
        </div>



		
	</div>
<br><br><br><br>
	<div id="datos"></div>
	
	
</section>





<br>
<br>
<br>

<?php  require('plantilla/footer.php')  ?>
    <script src="../vista//js/jquery-3.3.1.min.js"></script>
    <script src="../vista/js/bootstrap.min.js"></script>  
	<script src="../ajax/validarAdminitrarUsuarios.js"></script>
    
</body>
</html>



