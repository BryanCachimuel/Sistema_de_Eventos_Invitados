<?php
    session_start();
    include "../../clases/Auth.php";

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $Auth = new Auth();

    if($Auth->inicio_sesion($usuario, $password)){
        header("location:../../inicio.php");
    }else{
        echo "No se pudo realizar el Inicio de Sesión";
    }


?>