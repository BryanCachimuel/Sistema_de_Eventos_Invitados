<?php
    include "../../clases/Invitados.php";
    $Invitados = new Invitados();
    $items =$Invitados->mostrarInvitados();
?>
<table class="table table-sm table-hover" id="tabla_invitados_load">
    <thead>
        <tr>
            <th>Invitado</th>
            <th>Email</th>
            <th>Evento</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $inv) : ?>
        <tr>
            <td><?php echo $inv['nombreInvitado'] ?></td>
            <td><?php echo $inv['emailInvitado'] ?></td>
            <td><?php echo $inv['nombreEvento'] ?></td>
            <td><?php echo $inv['fechaEvento'] ?></td>
            <td>
                <span class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_agregar_invitado">
                    <i class="fa-solid fa-user-pen"></i>
                </span>
            </td>
            <td>
                <span class="btn btn-danger">
                    <i class="fa-solid fa-user-xmark"></i>
                </span>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function(){
        $('#tabla_invitados_load').DataTable({
            "language":{
              "decimal": "",
              "emptyTable": "No hay información",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
              "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
              "infoFiltered": "(Filtrado de _MAX_ total entradas)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Entradas",
              "loadingRecords": "Cargando...",
              "processing": "Procesando...",
              "search": "Buscar:",
              "zeroRecords": "Sin resultados encontrados",
              "paginate": {
                  "first": "Primero",
                  "last": "Ultimo",
                  "next": "Siguiente",
                  "previous": "Anterior"
              }
          },
          "lengthMenu": [[5, 10, 15, 20], [5, 10, 15, "All"]
          ],
      });
    });
</script>