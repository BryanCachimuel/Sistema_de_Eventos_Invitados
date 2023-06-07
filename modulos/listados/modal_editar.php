<?php
  $seleccionar = $Invitados->seleccionarEventosEditar();
?>
<form id="frmEditarInvitado" onsubmit="return actualizarInvitado()">
  <!-- Modal -->
  <div class="modal fade" id="modal_editar_invitado" tabindex="-1" aria-labelledby="modal_editar_invitadoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal_editar_invitadoLabel">Editar Invitado</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id_invitado" id="id_invitado">
          <?php echo $seleccionar; ?>
          <label for="nombre_invitadou">Nombre Invitado: </label>
          <input type="text" class="form-control" id="nombre_invitadou" name="nombre_invitadou" required>
          <label for="email_invitadou">Email Invitado: </label>
          <input type="email" class="form-control" id="email_invitadou" name="email_invitadou" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary">Actualizar</button>
        </div>
      </div>
    </div>
  </div>
</form>