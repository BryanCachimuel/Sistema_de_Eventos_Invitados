<?php
    session_start();
    $fecha = "";
    if(isset($_GET['fecha'])){
        $fecha = $_GET['fecha'];
    }
    include "../../clases/Eventos.php";
    $Eventos = new Eventos();
    $items = $Eventos->mostrarEventos($_SESSION['id_usuario'], $fecha);
?>
<table class="table table-sm table-hover" id="tabla_eventos_load">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
            <th>Fecha</th>
            <th>Cantidad Invitados</th>
            <th>Imprimir</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $evt) : ?>
            <tr>
                <td><?php echo $evt['evento_nombre'] ?></td>
                <td><?php echo $evt['hora_inicio'] ?></td>
                <td><?php echo $evt['hora_fin'] ?></td>
                <td><?php echo $evt['fecha'] ?></td>
                <td>
                    <?php $invitadosExistentes = $Eventos->existenInvitados($evt['id_evento']);  ?>
                    <?php echo $invitadosExistentes ?>
                </td>
                <td>
                    <?php
                    $invitadosExistentes = $Eventos->existenInvitados($evt['id_evento']);
                    if ($invitadosExistentes > 0) {
                    ?>
                        <a href="../servidor/impresion_evento/imprimir_evento.php?id_evento=<?php echo $evt['id_evento'] ?>" class="btn btn-info" target="_blank">
                            <i class="fa-solid fa-print"></i>
                        </a>
                    <?php
                    }
                    ?>
                </td>
                <td>
                    <span class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_editar_evento" onclick="editarEvento('<?php echo $evt['id_evento'] ?>')">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger" onclick="eliminarEvento('<?php echo $evt['id_evento'] ?>')">
                        <i class="fa-solid fa-trash-can"></i>
                    </span>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#tabla_eventos_load').DataTable({
            "language": {
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
            "lengthMenu": [
                [5, 10, 15, 20],
                [5, 10, 15, "All"]
            ],
        });
    });
</script>