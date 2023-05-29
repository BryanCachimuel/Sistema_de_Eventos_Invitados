<?php
    include "../../clases/Eventos.php";
    $Eventos = new Eventos();
    $items =$Eventos->mostrarEventos();
?>
<table class="table table-sm table-hover" id="tabla_eventos_load">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
            <th>Fecha</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $evt) : ?>
        <tr>
            <td><?php echo $evt['evento_nombre']?></td>
            <td><?php echo $evt['hora_inicio'] ?></td>
            <td><?php echo $evt['hora_fin'] ?></td>
            <td><?php echo $evt['fecha'] ?></td>
            <td>
                <span class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_editar_evento">
                    <i class="fa-solid fa-pen-to-square"></i>
                </span>
            </td>
            <td>
                <span class="btn btn-danger">
                    <i class="fa-solid fa-trash-can"></i>
                </span>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function(){
        $('#tabla_eventos_load').DataTable();
    });
</script>