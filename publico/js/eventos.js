$(document).ready(function () {
  $("#tablaEventos").load("eventos/tabla_eventos.php");
});

function agregarEvento() {
  $.ajax({
    type: "POST",
    data: $("#frmAgregarEvento").serialize(),
    url: "../servidor/eventos/agregar.php",
    success: function (respuesta) {
      if (respuesta == 1) {
        $("#tablaEventos").load("eventos/tabla_eventos.php");
        $("#frmAgregarEvento")[0].reset();
        Swal.fire({
          icon: "success",
          title: "Evento Agregado con Exito",
          showConfirmButton: false,
          timer: 1700,
        });
      } else {
        Swal.fire({
          icon: "error",
          title: "El Evento no se a Podido Agregr" + respuesta,
          showConfirmButton: false,
          timer: 1700,
        });
      }
    },
  });
  return false;
}

function eliminarEvento(id_evento) {
  Swal.fire({
    title: "¿Estás Seguro que quieres eliminar este Evento?",
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
        data: 'id_evento=' + id_evento,
        url: "../servidor/eventos/eliminar.php",
        success: function (respuesta) {
          if (respuesta == 1) {
            $("#tablaEventos").load("eventos/tabla_eventos.php");
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
