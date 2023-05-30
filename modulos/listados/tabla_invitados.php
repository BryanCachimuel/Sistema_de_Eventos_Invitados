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
        $('#tabla_invitados_load').DataTable();
    });
</script>