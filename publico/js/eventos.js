$(document).ready(function(){
    $('#tablaEventos').load('eventos/tabla_eventos.php');
});

function agregarEvento() {
    $.ajax({
        type:"POST",
        data:$('#frmAgregarEvento').serialize(),
        url:"../servidor/eventos/agregar.php",
        success:function(respuesta){
            if(respuesta == 1){
                $('#tablaEventos').load('eventos/tabla_eventos.php');
                $('#frmAgregarEvento')[0].reset();
                Swal.fire({
                    icon: 'success',
                    title: 'Evento Agregado con Exito',
                    showConfirmButton: false,
                    timer: 1700
                  })
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'El Evento no se a Podido Agregr' + respuesta,
                    showConfirmButton: false,
                    timer: 1700
                  })
            }
        }
    });
    return false;
}