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
            $sql = "SELECT usuario,correo FROM usuarios
                    WHERE id_usuario='$id_usuario'";
            $respuesta = mysqli_query($conexion,$sql);
            return mysqli_fetch_all($respuesta,MYSQLI_ASSOC);
        } catch (Exception $e) {
            echo "No se a podido mostrar los datos a editar en el formulario: ".$e;
        }
    }

    public function actualizarUsuario($data){
        try {
            $conexion = parent::conectar();
            $sql = "UPDATE usuarios SET usuario=?,
                                        correo=?
                    WHERE id_usuario=?";
            $query = $conexion->prepare($sql);
            $query->bind_param('ssi',$data['usuario'],
                                      $data['correo'],
                                      $data['id_usuario']);
            return $query->execute();
        } catch (Exception $e) {
            echo "No se a podido actualizar el usuario: ".$e;
        }
    }

    public function eliminarUsuario($id_usuario){
        try {
            $conexion= parent::conectar();
            $sql = "DELETE FROM usuarios WHERE id_usuario=?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i',$id_usuario);
            return $query->execute();
        } catch (Exception $e) {
            echo "No se a podido eliminar el usuario: ".$e;
        }
    }

}

?>