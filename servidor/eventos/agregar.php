<?php

    session_start();
    include "../../clases/Eventos.php";

    $Eventos = new Eventos();

    $data = Array(
       'id_usuario' => $_SESSION['id_usuario'],
       'evento_nombre' => $_POST['evento_nombre'],
       'hora_inicio' => $_POST['fecha'] ." ". $_POST['hora_inicio'],
       'hora_fin' => $_POST['fecha'] ." ". $_POST['hora_fin'],
       'fecha' => $_POST['fecha']
    );

    echo $Eventos->agregarEvento($data);

?>