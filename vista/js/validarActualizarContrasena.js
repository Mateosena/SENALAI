
    $(function () {
        console.log('jquery funciona')  ;
        $('#submitActualizarContrasena').click(function () {

           $.ajax({
               url:'../php/validarActualizarContrasena.php',
               type:'POST',
               data:$("#formularioActualizarContrasena").serialize(),
               beforeSend: function() {
                $('#loadingActualizarContrasena').show();
                $('#mensajeActualizarContrasena').html('procesando datos');

            },
               success:function (respuesta) {
                $('#loadingActualizarContrasena').hide();
                $('#mensajeActualizarContrasena').html('');
                
          
                  if (respuesta == 1) {
                    $('#modalExiotActualizarContrasena').modal("show");
                      
                  }else{
                    $('#mensajeActualizarContrasena').html(respuesta);
                  }
               }
           })
        }) 
       }
       
       )