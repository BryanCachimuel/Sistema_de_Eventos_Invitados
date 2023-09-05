<?php
    session_start();
    include "../../clases/Usuarios.php";
    $Usuario = new Usuarios();

    $data = array(
        "usuario" => $_POST['usuario_nombreu'],
        "correo" => $_POST['usuario_correou'],
        "id_usuario" => $_POST['id_usuario']
    );

    echo $Usuario->actualizarUsuario($data);
?>