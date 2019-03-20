<?php
require_once('../conexion.php');
require_once('../modelo/administrarUsuarios.php');



$salida = "";

$obj = new administrarUsuarios();
$query = $obj->consultarUsuarios();

if (isset($_POST['consulta'])) {
    $q = $_POST['consulta'];

    $obj = new administrarUsuarios();
    $query = $obj->consultarUsuariosPorLike($q);
    
}


 if ($query->num_rows>0) {




    
   $salida .="<div id='div1'>";
    $salida.="<table>
    
    <thead>
       <tr>
       <th>CAMBIAR ESTADO</th>
       <th>Editar</th>
          <th>DOCUMENTO</th>
          <th>TIPO DOCUMENTO</th>
          <th>NOMBRES</th>
          <th>PRIMER APELLIDO</th>
          <th>SEGUNDO APELLIDO</th>
          <th>DIRECCION</th>
          <th>CELULAR</th>
          <th>TEL</th>
          <th>EMAIL</th>
          <th>SEXO</th>
          <th>PROGRAMA</th>
          <th>FICHA</th>
          <th>CIUDAD</th>
          <th>USUARIO</th>
          <th>ROL</th>
         
          
          
       </tr>
    </thead>   
    <tbody>";

    while($fila = mysqli_fetch_array($query)) {

       $salida.="  <tr class='row-content'>";

       if ($fila['Estado_idEstado'] == 1) {
         $salida.= "<td> <a href='inhabilitarUsuario.php?numero_documento=".$fila['Numero_Documento']."'><button type='button' class='btn btn-danger'>Ihabilitar</button></a> </td>";
         
       }else  {
         $salida.= "<td> <a href='habilitarUsuario.php?numero_documento=".$fila['Numero_Documento']."'><button type='button' class='btn btn-success'>Habilitar</button></a> </td>";
       }

       $salida.= "<td> <a href='coordinadorEditarDatos.php?numero_documento=".$fila['Numero_Documento']."'><button type='button' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span></button></a> </td>";

       $salida.= "<td>".$fila['Numero_Documento']."</td>
          <td>".$fila['Tipo_Documento']."</td>
          <td>".$fila['Nombre']."</td>
          <td>".$fila['Apellido_Primero']."</td>
          <td>".$fila['Apellido_Segundo']."</td>
          <td>".$fila['Direccion']."</td>
          <td>".$fila['Numero_Celular']."</td>
          <td>".$fila['Telefono']."</td>
          <td>".$fila['Email']."</td>
          <td>".$fila['NombreSexo']."</td>         
          <td>".$fila['NombrePrograma']."</td>
          <td>".$fila['Numero_Ficha']."</td>
          <td>".$fila['NombreCiudad']."</td>
          <td>".$fila['Usuario']."</td>
          <td>".$fila['NombreRoles']."</td>";
          

           

          
         

       
       $salida .="</tr>";
       
    }
  
    $salida.="</tbody></table>";
    $salida .="</div>";
     
 }else{
   $salida="'<div class='alert alert-danger'>
   <strong>ERROR!</strong>No se encontraron datos.
   </div>'";
 }

 echo $salida;

    

?>