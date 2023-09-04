<?php
    session_start();
    include "../../clases/Usuarios.php";
    $Usuarios = new Usuarios();
    $id_usuario = $_POST['id_usuario'];
    echo json_encode($Usuarios->editarUsuarios($id_usuario));
?>