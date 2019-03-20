
    $(function () {
        console.log('jquery funciona')  ;
        $('#submitRecuperarContrasena').click(function () {

           $.ajax({
               url:'../validaciones/validarRecuperarContrasena.php',
               type:'POST',
               data:$("#formularioRecuperarContrasena").serialize(),
               beforeSend: function() {
                $('#loading').show();
                $('#mensajeRecuperarContrasena').html('procesando datos');

            },
               success:function (respuesta) {
                $('#loading').hide();
                $('#mensajeRecuperarContrasena').html('');
                
          
                  if (respuesta == 1) {
                    $('#modalExitoRecuperarContrasena').modal("show");
                      
                  }else{
                    $('#mensajeRecuperarContrasena').html(respuesta);
                  }
               }
           })
        }) 
       }
       
       )