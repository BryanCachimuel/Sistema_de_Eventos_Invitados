<form id="frmEditarUsuario" onsubmit="return actualizarUsuario()">
    <!-- Modal -->
    <div class="modal fade" id="modal_editar_usuario" tabindex="-1" aria-labelledby="modal_editar_usuarioLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h1 class="modal-title fs-5" id="modal_editar_usuarioLabel"><i class="fa-solid fa-file-pen"></i> Editar Usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id_usuario" id="id_usuario">
          <div class="mb-3">
            <label for="usuario_nombreu">Nombre de Usuario: </label>
            <input type="text" class="form-control" id="usuario_nombreu" name="usuario_nombreu" required>
          </div>

          <div class="mb-3">
            <label for="usuario_correou">Correo: </label>
            <input type="text" class="form-control" id="usuario_correou" name="usuario_correou" required>
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