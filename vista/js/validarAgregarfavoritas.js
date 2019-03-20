$( function () {
    $('#aceptaragregar').click( function () {
        
        
        $.ajax({
            url:'../php/validarAgregarfavoritas.php',
            type:'POST',
            data:$("#eliminaragregar").serialize(),

            success:function (respuesta) {
               if (respuesta == 1) {
                $('#ModalAgregarfavorita').modal("show");
               }else{
                $('#ModalEliminarfavorita').modal("show");  
               }
        



            }
       
    })
})
}
)