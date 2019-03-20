$( function () {
    $('#idtiporeceta').click( function () {
        
        
        $.ajax({
            url:'../php/validarTipoReceta.php',
            type:'POST',
            data:$("#receta").serialize(),

            success:function (respuesta) {
                $('#mostrar').html(respuesta);



            }
       
    })
})
}
)
