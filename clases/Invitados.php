<?php

    include "Conexion.php";

    class Invitados extends Conexion {

        public function mostrarInvitados(){
            try {
                $conexion = Conexion::conectar();
                $sql = "SELECT * FROM v_invitados";
                $respuesta = mysqli_query($conexion, $sql);
                return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
            } catch (Exception $e) {
                echo "No se ha podido mostrar la lista de invitados";
            }
        }
    }

?>