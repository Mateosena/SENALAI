
    $(function () {
        console.log(' funciona')  ;
        $('#submit').click(function () {

           $.ajax({
               url:'../php/validarLoginUsuario.php',
               type:'POST',
               data:$("#login").serialize(),
               beforeSend: function() {
                $('#loading').show();
                $('#mensajes').html('procesando datos');
            },
               success:function (respuesta) {
                $('#loading').hide();
                  if (respuesta == 1) {
                      location.href="../vista/bienvenido.php";
                      
                  }else{
                    $('#mensajes').html(respuesta);
                  }
               }
           })
        }) 
       }
       
       )