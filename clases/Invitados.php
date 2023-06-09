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
                echo "No se ha podido mostrar la lista de invitados: ".$e;
            }
        }

        public function seleccionarEventos(){
            try {
                $conexion = Conexion::conectar();
                $sql = "SELECT * FROM eventos";
                $respuesta = mysqli_query($conexion, $sql);
                $select = '<label for="id_evento">Seleccione un Evento: </label>
                            <select name="id_evento" id="id_evento" class="form-select" required>';

                while($mostrar = mysqli_fetch_array($respuesta)){
                    $select .=   '<option 
                                    value='.$mostrar['id_evento'].'>' . $mostrar['evento_nombre']. 
                                 '</option>';             
                }
                return $select .= '</select>';
            } catch (Exception $e) {
                echo "No se a podido obtener los eventos para seleccionar: ".$e;
            }
        }

        public function agregarInvitado($data){
            try {
                $conexion = Conexion::conectar();
                $sql = "INSERT INTO invitados(id_evento,
                                              nombre_invitado,
                                              email_invitado) 
                                    VALUES(?,?,?)"; 
                $query = $conexion->prepare($sql);
                $query->bind_param('iss',$data['id_evento'],
                                         $data['nombre_invitado'],
                                         $data['email_invitado']);
                return $query->execute();
            } catch (Exception $e) {
                echo "No se a podido agregar un invitado: ".$e;
            }
        }

        public function eliminarInvitado($id_invitado){
            try {
                $conexion = Conexion::conectar();
                    $sql = "DELETE FROM invitados WHERE id_invitado=?";
                    $query = $conexion->prepare($sql);
                    $query->bind_param('i',$id_invitado);
                    return $query->execute(); 
            } catch (Exception $e) {
                echo "No se a podido eliminar el invitado: ".$e;
            }
        }

        public function seleccionarEventosEditar(){
            try {
                $conexion = Conexion::conectar();
                $sql = "SELECT * FROM eventos";
                $respuesta = mysqli_query($conexion, $sql);
                $select = '<label for="id_eventoe">Seleccione un Evento: </label>
                            <select name="id_eventoe" id="id_eventoe" class="form-select" required>';

                while($mostrar = mysqli_fetch_array($respuesta)){
                    $select .=   '<option 
                                    value='.$mostrar['id_evento'].'>' . $mostrar['evento_nombre']. 
                                 '</option>';             
                }
                return $select .= '</select>';
            } catch (Exception $e) {
                echo "No se a podido obtener los eventos para seleccionar: ".$e;
            }
        }

        public function editarInvitado($id_invitado){
            try {
                $conexion = Conexion::conectar();
                $sql = "SELECT * FROM invitados 
                        WHERE id_invitado='$id_invitado'";
                $respuesta = mysqli_query($conexion,$sql);
                return mysqli_fetch_all($respuesta,MYSQLI_ASSOC);
            } catch (Exception $e) {
                echo "No se a podido extraer los datos del registro: ".$e;
            }
        }

        public function actualizarInvitado($data){
            try {
                $conexion = Conexion::conectar();
                $sql = "UPDATE invitados SET id_evento=?,
                                              nombre_invitado=?,
                                              email_invitado=? 
                        WHERE id_invitado=?"; 
                $query = $conexion->prepare($sql);
                $query->bind_param('issi',$data['id_evento'],
                                          $data['nombre_invitado'],
                                          $data['email_invitado'],
                                          $data['id_invitado']);
                return $query->execute();
            } catch (Exception $e) {
                echo "No sea podido actualzar el registro: ".$e;
            }
        }
    }
?>