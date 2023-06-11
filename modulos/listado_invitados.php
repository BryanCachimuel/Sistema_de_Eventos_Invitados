<?php
  include "partes/header.php";
  include "../clases/Eventos.php";
  $Eventos = new Eventos();
  $id_evento = $_GET['id_evento'];
  $items = $Eventos->mostrarInvitadosEvento($id_evento);
?>

<!-- Contenido -->
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mt-3">
        <div class="card-body">
          <h2>Evento: <?php echo @$items[0]['nombreEvento'] ?></h2>
          <h3>Fecha del Evento: <?php echo @$items[0]['fechaEvento'] ?></h3>
          <br>
          <table class="table table-sm table-hover" id="tabla_invitados_load">
            <thead>
              <tr>
                <th>Invitado</th>
                <th>Email</th>
                <th>Evento</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                  if(count($items) > 0) : 
                    foreach ($items as $linv) : 
                ?>
                <tr>
                  <td><?php echo $linv['nombreInvitado'] ?></td>
                  <td><?php echo $linv['emailInvitado'] ?></td>
                  <td><?php echo $linv['nombreEvento'] ?></td>
                </tr>
                <?php 
                    endforeach;
                  endif; 
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>