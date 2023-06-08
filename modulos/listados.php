<?php 
  include "../clases/Invitados.php";
  $Invitados = new Invitados();
  include "partes/header.php"; 
  include "partes/menu.php";
?>

<!-- Contenido -->
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mt-3">
        <div class="card-body">
          <h3 class="titulo">Listado de Invitados</h3>
          <br>
          <span class="btn btn-purple" data-bs-toggle="modal" data-bs-target="#modal_agregar_invitado">
            <i class="fa-solid fa-circle-plus"></i> Listado Nuevo
          </span>
          <hr>
          <div id="tablaInvitados"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
  include "listados/modal_agregar.php";
  include "listados/modal_editar.php";
  include "partes/footer.php"; 
?>

<script src="../publico/js/invitados.js"></script>
    
