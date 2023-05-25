<?php

    include "Conexion.php";

    class Auth extends Conexion {

        public function registrar($usuario, $correo, $password){
            try {
                $conexion = parent::conectar();
                $sql = "INSERT INTO usuarios(usuario,correo,password) VALUES(?,?,?)";
                $query = $conexion->prepare($sql);
                $query->bind_param('sss',$usuario,$correo,$password);
                return $query->execute();
            } catch (Exception $e) {
                echo "No se pudo registrar el usuario";
            }
        }

        public function inicio_sesion($usuario, $password){
           try {
                $conexion = parent::conectar();
                $passwordExistente = "";
                $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
                $respuesta = mysqli_query($conexion, $sql);
                $passwordExistente = mysqli_fetch_array($respuesta)['password'];
                
                if(password_verify($password, $passwordExistente)){
                    $_SESSION['usuario'] = $usuario;
                    return true;
                }else{
                    return false;
                }
           } catch (Exception $e) {
                echo "No se pudo realizar el inicio de sesión";
           }
        }

    }

?>