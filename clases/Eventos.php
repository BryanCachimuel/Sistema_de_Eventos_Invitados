<?php

    include "Conexion.php";

    class Eventos extends Conexion{

        public function mostrarEventos(){
            try {
                $conexion = Conexion::conectar();
                $sql = "SELECT * FROM eventos";
                $respuesta = mysqli_query($conexion, $sql);
                return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
            } catch (Exception $e) {
                echo "No se a podido mostrar la lista de Eventos";
            }
        }

    }

?>