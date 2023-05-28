<?php
    session_start();
    include "../../clases/Auth.php";

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $Auth = new Auth();

    if($usuario != "" && $password != ""){
        if($Auth->inicio_sesion($usuario, $password)){
            header("location:../../modulos/inicio.php");
        }else{
            header("location:../../inicio_sesion.php");
            echo "No se pudo realizar el Inicio de Sesión";
        }
    }else{
        header("location:../../inicio_sesion.php");
        echo "Ingrese Información dentro de los campos de texto";
    }


?>