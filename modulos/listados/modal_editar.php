<?php
  $seleccionar = $Invitados->seleccionarEventosEditar($_SESSION['id_usuario']);
?>
<form id="frmEditarInvitado" onsubmit="return actualizarInvitado()">
  <!-- Modal -->
  <div class="modal fade" id="modal_editar_invitado" tabindex="-1" aria-labelledby="modal_editar_invitadoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h1 class="modal-title fs-5" id="modal_editar_invitadoLabel"><i class="fa-solid fa-file-pen"></i> Editar Invitado</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id_invitado" id="id_invitado">
          <div class="mb-3">
            <?php echo $seleccionar; ?>
          </div>
         
          <div class="mb-3">
            <label for="nombre_invitadou">Nombre Invitado: </label>
            <input type="text" class="form-control" id="nombre_invitadou" name="nombre_invitadou" required>
          </div>
          
          <div class="mb-3">
            <label for="email_invitadou">Email Invitado: </label>
            <input type="email" class="form-control" id="email_invitadou" name="email_invitadou" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancelar</button>
          <button class="btn btn-primary"><i class="fa-solid fa-pen-nib"></i> Actualizar</button>
        </div>
      </div>
    </div>
  </div>
</form>