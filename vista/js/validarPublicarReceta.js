$( function () {
    $('#submit').click( function () {
        
        var formData = new FormData($("#formularioReceta")[0]);
         var ruta = "../php/validarPublicarReceta.php";
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
                  $('#modalExitoRegistroReceta').modal("show");
                    
                }else{
                  $('#mensajes').html(respuesta);
                }
                  
   

            }
       
    })
})
}
)