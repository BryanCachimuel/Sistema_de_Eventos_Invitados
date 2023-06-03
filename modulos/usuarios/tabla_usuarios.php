<?php
    include "../../clases/Auth.php";
    $Auth = new Auth();
    $items = $Auth->listarUsuarios();
?>
<table class="table table-sm table-hover" id="tabla_usuarios_load">
    <thead>
        <tr>
            <th>Nombre de Usuario</th>
            <th>Correo</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $usr) : ?>
        <tr>
            <td><?php echo $usr['usuario']?></td>
            <td><?php echo $usr['correo'] ?></td>
            <td>
                <span class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_editar_usuario">
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

