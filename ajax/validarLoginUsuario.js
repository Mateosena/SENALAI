

$(function () {
    console.log(' funciona')  ;
    $('#submit').click(function () {

       $.ajax({
           url:'validaciones/validarLoginUsuario.php',
           type:'POST',
           data:$("#login").serialize(),
           beforeSend: function() {
            $('#loading').show();
            $('#mensajes').html('procesando datos');
        },
           success:function (respuesta) {
            $('#loading').hide();
              if (respuesta == 1) {
                  location.href="controlador/bienvenido.php";
                  
              }else{
                $('#mensajes').html(respuesta);
              }
           }
       })
    }) 
   }
   
   )

