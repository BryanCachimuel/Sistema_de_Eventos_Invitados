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

function eliminarInvitado(id_invitado){
    Swal.fire({
        title: "¿Estás Seguro que quieres eliminar este Invitado?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Eliminar",
        cancelButtonText: "Cancelar",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            type: "POST",
            data: 'id_invitado=' + id_invitado,
            url: "../servidor/invitados/eliminar.php",
            success: function (respuesta) {
              if (respuesta == 1) {
                $('#tablaInvitados').load('listados/tabla_invitados.php');
                Swal.fire({
                  icon: "success",
                  title: "Eliminado",
                  showConfirmButton: false,
                  timer: 1900,
                });
              } else {
                Swal.fire({
                  icon: "error",
                  title: "El Evento no se a Podido Eliminar" + respuesta,
                  showConfirmButton: false,
                  timer: 1900,
                });
              }
            },
          });
        }
      });
      return false;
}