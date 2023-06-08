<form id="frmEditarEvento" onsubmit="return actualizarEvento()">
    <!-- Modal -->
    <div class="modal fade" id="modal_editar_evento" tabindex="-1" aria-labelledby="modal_editar_eventoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h1 class="modal-title fs-5" id="modal_editar_eventoLabel"><i class="fa-solid fa-file-pen"></i> Editar Evento</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id_evento" id="id_evento">
          <div class="mb-3">
            <label for="evento_nombreu">Nombre del Evento: </label>
            <input type="text" class="form-control" id="evento_nombreu" name="evento_nombreu" required>
          </div>

          <div class="mb-3">
            <label for="hora_iniciou">Hora Inicio: </label>
            <input type="time" class="form-control" id="hora_iniciou" name="hora_iniciou" required>
          </div>
         
          <div class="mb-3">
            <label for="hora_finu">Hora Fin: </label>
            <input type="time" class="form-control" id="hora_finu" name="hora_finu" required>
          </div>
         
          <div>
            <label for="fechau">Fecha: </label>
            <input type="date" class="form-control" id="fechau" name="fechau" required>
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