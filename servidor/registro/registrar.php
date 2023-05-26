<?php

    include "../../clases/Auth.php";

    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $confirmar_password = $_POST['confirmar_password'];

    $Auth = new Auth();
    
    if($password == $confirmar_password){
        $password_ingresado = password_hash($password,PASSWORD_DEFAULT);
        /* una vez que registre se va a redirigir al inicio de sesión */
        if($Auth->registrar($usuario, $correo, $password_ingresado)){
            header("location:../../inicio_sesion.php");
        }else{
            echo "No se pudo registrar al Usuario";
        }
    }else{
        header("location:../../registro.php");
        echo "Las contraseñas no coinciden deben ser iguales";
    }
   

    

?>