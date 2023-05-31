<form id="frmAgregarEvento" onsubmit="return agregarEvento()">
    <!-- Modal -->
  <div class="modal fade" id="modal_agregar_evento" tabindex="-1" aria-labelledby="modal_agregar_eventoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal_agregar_eventoLabel">Agregar Evento</h1>
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
          <button class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>

</form>