
    $(function () {
        console.log('jquery funciona2')  ;
        $('#aceptar').click(function () {

           $.ajax({
               url:'../php/validarContrasenaActualizarDatos.php',
               type:'POST',
               data:$("#verificarcontrasena").serialize(),
               beforeSend: function() {
                $('#loadingg').show();
                $('#mensaje').html('procesando datos');

            },
               success:function (respuesta) {
                $('#loadingg').hide();
                $('#mensaje').html('');
                
                
          
                  if (respuesta == 1) {
                    $('#exampleModalCenter').modal("hide"); 
                    $('#Modalexito').modal("show");
                    
                      
                  }else{
                    $('#mensaje').html(respuesta);
                  }
               }
           })
        }) 
       }
       
       )