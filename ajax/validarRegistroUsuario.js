
    $(function () {
        console.log('jquery funciona')  ;
        $('#submit').click(function () {

           $.ajax({
               url:'../validaciones/validarRegistroUsuario.php',
               type:'POST',
               data:$("#formularioRegistroUsuario").serialize(),
               beforeSend: function() {
                $('#loading').show();
                $('#mensajes').html('procesando datos');
            },
               success:function (respuesta) {
                $('#loading').hide();
                  if (respuesta == 1) {
                    $('#modalExitoRegistroUsuario').modal("show");
                      
                  }else{
                    $('#mensajes').html(respuesta);
                  }
               }
           })
        }) 
       }
       
       )
 
