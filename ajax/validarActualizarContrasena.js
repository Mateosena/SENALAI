
    $(function () {
        console.log('jquery funciona')  ;
        $('#submitActualizarContrasena').click(function () {

           $.ajax({
               url:'../validaciones/validarActualizarContrasena.php',
               type:'POST',
               data:$("#formularioActualizarContrasena").serialize(),
               beforeSend: function() {
                $('#loading').show();
                $('#mensajeActualizarContrasena').html('procesando datos');

            },
               success:function (respuesta) {
                $('#loading').hide();
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