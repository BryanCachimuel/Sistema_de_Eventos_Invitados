<?php

    include "Conexion.php";

    class Auth extends Conexion {

        public function registrar($usuario, $correo, $password){
            $conexion = parent::conectar();
            $sql = "INSERT INTO usuarios(usuario,correo,password) VALUES(?,?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ss',$usuario,$correo,$password);
            return $query->execute();
        }

    }

?>