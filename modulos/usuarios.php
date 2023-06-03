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
          Listado de Usuarios <br>
          <!--<span href="" class="btn btn-purple" data-bs-toggle="modal" data-bs-target="#modal_agregar_evento">Evento Nuevo</span>-->
          <hr>
          <div id="tablaUsuarios"></div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php 
  include "partes/footer.php"; 
?>

<script src="../publico/js/usuarios.js"></script>