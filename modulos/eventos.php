<?php 
  include "partes/header.php"; 
  include "partes/menu.php";
?>

<!-- Contenido -->
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mt-3">
        <div class="card-body">
          Listado de Eventos <br>
          <span href="" class="btn btn-purple" data-bs-toggle="modal" data-bs-target="#modal_agregar_evento">Evento Nuevo</span>
          <hr>
          <div id="tablaEventos"></div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php 
  include "eventos/modal_agregar.php";
  include "eventos/modal_editar.php";
  include "partes/footer.php"; 
?>

<script src="../publico/js/eventos.js"></script>


    
