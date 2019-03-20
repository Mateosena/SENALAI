

$(function () {
  console.log(' funciona')  ;
  $('#submitRecuperarContrasena').click(function () {

     $.ajax({
         url:'../validaciones/validarEmailRecuperarContrasena.php',
         type:'POST',
         data:$("#emailformularioRecuperarContrasena").serialize(),
         beforeSend: function() {
          $('#loading').show();
          $('#mensajes').html('procesando datos');
      },
         success:function (respuesta) {
          $('#loading').hide();
            if (respuesta == 1) {
              $('#jj').modal("show");  
            }else{
              $('#mensajes').html(respuesta);
            }
         }
     })
  }) 
 }
 
 )

