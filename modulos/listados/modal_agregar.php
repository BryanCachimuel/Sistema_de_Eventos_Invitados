<?php
  $select =$Invitados->seleccionarEventos();
?>

<form id="frmAgregarInvitado" onsubmit="return agregarInvitado()">
    <!-- Modal -->
  <div class="modal fade" id="modal_agregar_invitado" tabindex="-1" aria-labelledby="modal_agregar_invitadoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h1 class="modal-title fs-5" id="modal_agregar_invitadoLabel"><i class="fa-solid fa-circle-check"></i> Agregar Invitados</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <?php echo $select; ?>
          </div>

          <div class="mb-3">
            <label for="nombre_invitado">Nombre Invitado: </label>
            <input type="text" class="form-control" id="nombre_invitado" name="nombre_invitado" required>
          </div>
          
          <div>
            <label for="email_invitado">Email Invitado: </label>
            <input type="email" class="form-control" id="email_invitado" name="email_invitado" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancelar</button>
          <button class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>
