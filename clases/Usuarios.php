<?php 

include "Conexion.php";

class Usuarios extends Conexion {

    public function listadoUsuarios(){
        try {
            $conexion = parent::conectar();
            $sql = "SELECT * FROM usuarios";
            $respuesta = mysqli_query($conexion,$sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        } catch (Exception $e) {
            echo "No se a podido mostrar el listado de usuarios: ".$e;
        }
    }

    public function editarUsuarios($id_usuario){
        try {
            $conexion = parent::conectar();
            $sql = "SELECT * FROM usuarios
                    WHERE id_usuario='$id_usuario'";
            $respuesta = mysqli_query($conexion,$sql);
            return mysqli_fetch_all($respuesta,MYSQLI_ASSOC);
        } catch (Exception $e) {
            echo "No se a podido mostrar los datos a editar en el formulario: ".$e;
        }
    }

}

?>