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
                $data_usuario = "";
                $password_usuario = "";
                $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
                $respuesta = mysqli_query($conexion, $sql);
                
                if(mysqli_num_rows($respuesta) > 0){
                    $data_usuario = mysqli_fetch_array($respuesta);
                    $password_usuario = $data_usuario['password'];

                    if(password_verify($password, $password_usuario)){
                        $_SESSION['usuario'] = $usuario;
                        $_SESSION['id_usuario'] = $data_usuario['id_usuario'];
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
                
           } catch (Exception $e) {
                echo "No se pudo realizar el inicio de sesión";
           }
        }

    }

?>