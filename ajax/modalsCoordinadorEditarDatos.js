
$(function () {

console.log(' funciona marta')  ;








//CAMBIAR TIPO DOCUMENTO


$('#cambiarTipoDocumento').click(function () {
  $('#modalCambiarTipoDocumento').modal("show");

}) 



$('#submitCambiarTipoDocumento').click(function () {

$.ajax({
  url:'../validaciones/validarCoordinadorEditarDatos.php',
  type:'POST',
  data:$("#formularioCambiarTipoDocumento").serialize(),
  beforeSend: function() {
   $('#loading').show();
   $('#mensajesCambiarTipoDocumento').html('procesando datos');
},
  success:function (respuesta) {
   $('#loading').hide();
     if (respuesta == 1) {
      $('#modalCambiarTipoDocumento').modal('hide');
       $('#exitoModalCambiarTipoDocumento').modal("show");  
     }else{
       $('#mensajesCambiarTipoDocumento').html(respuesta);
     }
  }
})
})














//CAMBIAR DOCUMENTO


$('#cambiarDocumento').click(function () {
  $('#modalCambiarDocumento').modal("show");

}) 



$('#submitCambiarDocumento').click(function () {

$.ajax({
  url:'../validaciones/validarCoordinadorEditarDatos.php',
  type:'POST',
  data:$("#formularioCambiarDocumento").serialize(),
  beforeSend: function() {
   $('#loading').show();
   $('#mensajesCambiarDocumento').html('procesando datos');
},
  success:function (respuesta) {
   $('#loading').hide();
     if (respuesta == 1) {
      $('#modalCambiarDocumento').modal('hide');
       $('#exitoModalCambiarDocumento').modal("show");  
     }else{
       $('#mensajesCambiarDocumento').html(respuesta);
     }
  }
})
})









//CAMBIAR NOMBRE

$('#cambiarNombre').click(function () {
        $('#modalCambiarNombre').modal("show");

}) 



$('#submitCambiarNombre').click(function () {
  
    $.ajax({
        url:'../validaciones/validarCoordinadorEditarDatos.php',
        type:'POST',
        data:$("#formularioCambiarNombre").serialize(),
        beforeSend: function() {
         $('#loading').show();
         $('#mensajesCambiarNombre').html('procesando datos');
     },
        success:function (respuesta) {
         $('#loading').hide();
           if (respuesta == 1) {
            $('#modalCambiarNombre').modal('hide');
             $('#exitoModalCambiarNombre').modal("show");  
           }else{
             $('#mensajesCambiarNombre').html(respuesta);
           }
        }
    })
 })





//CAMBIAR PRIMER APELLIDO


$('#cambiarPrimerApellido').click(function () {
  $('#modalCambiarPrimerApellido').modal("show");

}) 



$('#submitCambiarPrimerApellido').click(function () {

$.ajax({
  url:'../validaciones/validarCoordinadorEditarDatos.php',
  type:'POST',
  data:$("#formularioCambiarPrimerApellido").serialize(),
  beforeSend: function() {
   $('#loading').show();
   $('#mensajesCambiarPrimerApellido').html('procesando datos');
},
  success:function (respuesta) {
   $('#loading').hide();
     if (respuesta == 1) {
      $('#modalCambiarPrimerApellido').modal('hide');
       $('#exitoModalCambiarPrimerApellido').modal("show");  
     }else{
       $('#mensajesCambiarPrimerApellido').html(respuesta);
     }
  }
})
})


//CAMBIAR SEGUNDO APELLIDO


$('#cambiarSegundoApellido').click(function () {
  $('#modalCambiarSegundoApellido').modal("show");

}) 



$('#submitCambiarSegundoApellido').click(function () {

$.ajax({
  url:'../validaciones/validarCoordinadorEditarDatos.php',
  type:'POST',
  data:$("#formularioCambiarSegundoApellido").serialize(),
  beforeSend: function() {
   $('#loading').show();
   $('#mensajesCambiarSegundoApellido').html('procesando datos');
},
  success:function (respuesta) {
   $('#loading').hide();
     if (respuesta == 1) {
      $('#modalCambiarSegundoApellido').modal('hide');
       $('#exitoModalCambiarSegundoApellido').modal("show");  
     }else{
       $('#mensajesCambiarSegundoApellido').html(respuesta);
     }
  }
})
})


 //CAMBIAR  DIRECCION


$('#cambiarDireccion').click(function () {
  $('#modalCambiarDireccion').modal("show");

}) 



$('#submitCambiarDireccion').click(function () {

$.ajax({
  url:'../validaciones/validarCoordinadorEditarDatos.php',
  type:'POST',
  data:$("#formularioCambiarDireccion").serialize(),
  beforeSend: function() {
   $('#loading').show();
   $('#mensajesCambiarDireccion').html('procesando datos');
},
  success:function (respuesta) {
   $('#loading').hide();
     if (respuesta == 1) {
      $('#modalCambiarDireccion').modal('hide');
       $('#exitoModalCambiarDireccion').modal("show");  
     }else{
       $('#mensajesCambiarDireccion').html(respuesta);
     }
  }
})
})


//CAMBIAR  NUMERO CELULAR


$('#cambiarNumeroCelular').click(function () {
  $('#modalCambiarNumeroCelular').modal("show");

}) 



$('#submitCambiarNumeroCelular').click(function () {

$.ajax({
  url:'../validaciones/validarCoordinadorEditarDatos.php',
  type:'POST',
  data:$("#formularioCambiarNumeroCelular").serialize(),
  beforeSend: function() {
   $('#loading').show();
   $('#mensajesCambiarNumeroCelular').html('procesando datos');
},
  success:function (respuesta) {
   $('#loading').hide();
     if (respuesta == 1) {
      $('#modalCambiarNumeroCelular').modal('hide');
       $('#exitoModalCambiarNumeroCelular').modal("show");  
     }else{
       $('#mensajesCambiarNumeroCelular').html(respuesta);
     }
  }
})
})



//CAMBIAR  TELEFONO


$('#cambiarTelefono').click(function () {
  $('#modalCambiarTelefono').modal("show");

}) 



$('#submitCambiarTelefono').click(function () {

$.ajax({
  url:'../validaciones/validarCoordinadorEditarDatos.php',
  type:'POST',
  data:$("#formularioCambiarTelefono").serialize(),
  beforeSend: function() {
   $('#loading').show();
   $('#mensajesCambiarTelefono').html('procesando datos');
},
  success:function (respuesta) {
   $('#loading').hide();
     if (respuesta == 1) {
      $('#modalCambiarTelefono').modal('hide');
       $('#exitoModalCambiarTelefono').modal("show");  
     }else{
       $('#mensajesCambiarTelefono').html(respuesta);
     }
  }
})
})




//CAMBIAR  EMAIL


$('#cambiarEmail').click(function () {
  $('#modalCambiarEmail').modal("show");

}) 



$('#submitCambiarEmail').click(function () {

$.ajax({
  url:'../validaciones/validarCoordinadorEditarDatos.php',
  type:'POST',
  data:$("#formularioCambiarEmail").serialize(),
  beforeSend: function() {
   $('#loading').show();
   $('#mensajesCambiarEmail').html('procesando datos');
},
  success:function (respuesta) {
   $('#loading').hide();
     if (respuesta == 1) {
      $('#modalCambiarEmail').modal('hide');
       $('#exitoModalCambiarEmail').modal("show");  
     }else{
       $('#mensajesCambiarEmail').html(respuesta);
     }
  }
})
})





//CAMBIAR  SEXO


$('#cambiarSexo').click(function () {
  $('#modalCambiarSexo').modal("show");

}) 



$('#submitCambiarSexo').click(function () {

$.ajax({
  url:'../validaciones/validarCoordinadorEditarDatos.php',
  type:'POST',
  data:$("#formularioCambiarSexo").serialize(),
  beforeSend: function() {
   $('#loading').show();
   $('#mensajesCambiarSexo').html('procesando datos');
},
  success:function (respuesta) {
   $('#loading').hide();
     if (respuesta == 1) {
      $('#modalCambiarSexo').modal('hide');
       $('#exitoModalCambiarSexo').modal("show");  
     }else{
       $('#mensajesCambiarSexo').html(respuesta);
     }
  }
})
})





//CAMBIAR  PROGRAMA


$('#cambiarPrograma').click(function () {
  $('#modalCambiarPrograma').modal("show");

}) 



$('#submitCambiarPrograma').click(function () {

$.ajax({
  url:'../validaciones/validarCoordinadorEditarDatos.php',
  type:'POST',
  data:$("#formularioCambiarPrograma").serialize(),
  beforeSend: function() {
   $('#loading').show();
   $('#mensajesCambiarPrograma').html('procesando datos');
},
  success:function (respuesta) {
   $('#loading').hide();
     if (respuesta == 1) {
      $('#modalCambiarPrograma').modal('hide');
       $('#exitoModalCambiarPrograma').modal("show");  
     }else{
       $('#mensajesCambiarPrograma').html(respuesta);
     }
  }
})
})






//CAMBIAR  NUMERO FICHA


$('#cambiarFicha').click(function () {
  $('#modalCambiarFicha').modal("show");

}) 



$('#submitCambiarFicha').click(function () {

$.ajax({
  url:'../validaciones/validarCoordinadorEditarDatos.php',
  type:'POST',
  data:$("#formularioCambiarFicha").serialize(),
  beforeSend: function() {
   $('#loading').show();
   $('#mensajesCambiarFicha').html('procesando datos');
},
  success:function (respuesta) {
   $('#loading').hide();
     if (respuesta == 1) {
      $('#modalCambiarFicha').modal('hide');
       $('#exitoModalCambiarFicha').modal("show");  
     }else{
       $('#mensajesCambiarFicha').html(respuesta);
     }
  }
})
})





//CAMBIAR  CIUDAD


$('#cambiarCiudad').click(function () {
  $('#modalCambiarCiudad').modal("show");

}) 



$('#submitCambiarCiudad').click(function () {

$.ajax({
  url:'../validaciones/validarCoordinadorEditarDatos.php',
  type:'POST',
  data:$("#formularioCambiarCiudad").serialize(),
  beforeSend: function() {
   $('#loading').show();
   $('#mensajesCambiarCiudad').html('procesando datos');
},
  success:function (respuesta) {
   $('#loading').hide();
     if (respuesta == 1) {
      $('#modalCambiarCiudad').modal('hide');
       $('#exitoModalCambiarCiudad').modal("show");  
     }else{
       $('#mensajesCambiarCiudad').html(respuesta);
     }
  }
})
})





//CAMBIAR  USUARIO


$('#cambiarUsuario').click(function () {
  $('#modalCambiarUsuario').modal("show");

}) 



$('#submitCambiarUsuario').click(function () {

$.ajax({
  url:'../validaciones/validarCoordinadorEditarDatos.php',
  type:'POST',
  data:$("#formularioCambiarUsuario").serialize(),
  beforeSend: function() {
   $('#loading').show();
   $('#mensajesCambiarUsuario').html('procesando datos');
},
  success:function (respuesta) {
   $('#loading').hide();
     if (respuesta == 1) {
      $('#modalCambiarUsuario').modal('hide');
       $('#exitoModalCambiarUsuario').modal("show");  
     }else{
       $('#mensajesCambiarUsuario').html(respuesta);
     }
  }
})
})





//CAMBIAR  ROL


$('#cambiarRol').click(function () {
  $('#modalCambiarRol').modal("show");

}) 



$('#submitCambiarRol').click(function () {

$.ajax({
  url:'../validaciones/validarCoordinadorEditarDatos.php',
  type:'POST',
  data:$("#formularioCambiarRol").serialize(),
  beforeSend: function() {
   $('#loading').show();
   $('#mensajesCambiarRol').html('procesando datos');
},
  success:function (respuesta) {
   $('#loading').hide();
     if (respuesta == 1) {
      $('#modalCambiarRol').modal('hide');
       $('#exitoModalCambiarRol').modal("show");  
     }else{
       $('#mensajesCambiarRol').html(respuesta);
     }
  }
})
})






}
)



