<?php

    include "../../clases/Auth.php";

    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $Auth = new Auth();
    
    /* una vez que registre se va a redirigir al inicio de sesión */
    if($Auth->registrar($usuario, $correo, $password)){
        header("location:../../inicio_sesion.php");
    }else{
        echo "No se pudo registrar al Usuario";
    }

    

?>