$(function () {
    console.log('jquery funciona')  ;
    $('#submit').click(function () {

       $.ajax({
           url:'../php/validarNuevoTipoReceta.php',
           type:'POST',
           data:$("#formularioTipoReceta").serialize(),
           beforeSend: function() {
            $('#loading').show();
            $('#mensajes').html('procesando datos');

        },
           success:function (respuesta) {
            $('#loading').hide();
            $('#mensajes').html('');
            
      
              if (respuesta == 1) {
                $('#ModalexitoTipoReceta').modal("show");
                  
              }else{
                $('#mensajes').html(respuesta);
              }
           }
       })
    }) 
   }
   
   )