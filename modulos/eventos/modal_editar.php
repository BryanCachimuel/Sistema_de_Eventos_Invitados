<form id="frmEditarEvento" onsubmit="return editarEvento()">
    <!-- Modal -->
    <div class="modal fade" id="modal_editar_evento" tabindex="-1" aria-labelledby="modal_editar_eventoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h1 class="modal-title fs-5" id="modal_editar_eventoLabel">Editar Evento</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label for="evento_nombre">Nombre del Evento: </label>
          <input type="text" class="form-control" id="evento_nombre" name="evento_nombre" required>
          <label for="hora_inicio">Hora Inicio: </label>
          <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" required>
          <label for="hora_fin">Hora Fin: </label>
          <input type="time" class="form-control" id="hora_fin" name="hora_fin" required>
          <label for="fecha">Fecha: </label>
          <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary">Editar</button>
        </div>
      </div>
    </div>
  </div>

</form>