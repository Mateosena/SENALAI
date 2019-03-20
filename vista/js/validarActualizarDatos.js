
    $(function () {
        console.log('jquery funciona')  ;
        $('#submit').click(function () {

           $.ajax({
               url:'../php/validarActualizarDatos.php',
               type:'POST',
               data:$("#formulario").serialize(),
               beforeSend: function() {
                $('#loading').show();
                $('#mensajes').html('procesando datos');

            },
               success:function (respuesta) {
                $('#loading').hide();
                $('#mensajes').html('');
                
          
                  if (respuesta == 1) {
                    $('#exampleModalCenter').modal("show");
                      
                  }else{
                    $('#mensajes').html(respuesta);
                  }
               }
           })
        }) 
       }
       
       )
 