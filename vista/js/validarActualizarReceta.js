$( function () {
    $('#submit').click( function () {
        
        var formData = new FormData($("#formularioRecetaActualizar")[0]);
         var ruta = "../php/validarActualizarReceta.php";
        $.ajax({
            url: ruta,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('#loading').show();
                $('#mensajes').html('procesando datos');
            },
            success:function (respuesta) {
                $('#loading').hide();
                if (respuesta == 1) {
                  $('#modalExitoActualizoReceta').modal("show");
                    
                }else{
                  $('#mensajes').html(respuesta);
                }
                  
   

            }
       
    })
})
}
)