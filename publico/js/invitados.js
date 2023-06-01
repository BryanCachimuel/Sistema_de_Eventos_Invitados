$(document).ready(function(){
    $('#tablaInvitados').load('listados/tabla_invitados.php');
});

function agregarInvitado(){
    $.ajax({
        type:"POST",
        data:$('#frmAgregarInvitado').serialize(),
        url:"../servidor/invitados/agregar.php",
        success:function(respuesta){
            if(respuesta == 1){
                $('#tablaInvitados').load('listados/tabla_invitados.php');
                $('#frmAgregarInvitado')[0].reset();
                Swal.fire({
                    icon: 'success',
                    title: 'Invitado Agregado con Exito',
                    showConfirmButton: false,
                    timer: 1700
                  })
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'El Invitado no se a Podido Agregr' + respuesta,
                    showConfirmButton: false,
                    timer: 1700
                  })
            }
        }
    });

    return false;
}