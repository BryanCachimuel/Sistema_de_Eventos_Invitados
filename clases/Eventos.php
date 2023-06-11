<?php

    include "Conexion.php";

    class Eventos extends Conexion{

        public function mostrarEventos($id_usuario){
            try {
                $conexion = Conexion::conectar();
                $sql = "SELECT id_evento,
                                evento_nombre,
                                DATE_FORMAT(hora_inicio,'%H:%i:%s') AS hora_inicio, 
                                DATE_FORMAT(hora_fin,'%H:%i:%s') AS hora_fin,
                                DATE_FORMAT(fecha, '%d-%m-%Y') AS fecha 
                        FROM eventos WHERE id_usuario='$id_usuario'";
                $respuesta = mysqli_query($conexion, $sql);
                return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
            } catch (Exception $e) {
                echo "No se a podido mostrar la lista de Eventos: ".$e;
            }
        }

        public function agregarEvento($data){
            try {
                $conexion = Conexion::conectar();
                $sql = "INSERT INTO eventos(id_usuario,
                                            evento_nombre,
                                            hora_inicio,
                                            hora_fin,
                                            fecha)
                        VALUES(?,?,?,?,?)";
                $query = $conexion->prepare($sql);
                $query->bind_param('issss', $data['id_usuario'],
                                            $data['evento_nombre'],
                                            $data['hora_inicio'],
                                            $data['hora_fin'],
                                            $data['fecha']);
                return $query->execute();
            } catch (Exception $e) {
                echo "No se a podido agregar el evento nuevo: ".$e;
            }
        }

        public function eliminarEvento($id_evento){
            try {
                $conexion = Conexion::conectar();
                $sql = "DELETE FROM eventos WHERE id_evento=?";
                $query = $conexion->prepare($sql);
                $query->bind_param('i',$id_evento);
                return $query->execute();
            } catch (Exception $e) {
                echo "No se a podido eliminar el evento: ".$e;
            }
        }

        public function editarEvento($id_evento){
            try {
                $conexion = Conexion::conectar();
                $sql = "SELECT id_evento,
                               evento_nombre,
                               DATE_FORMAT(hora_inicio,'%H:%i:%s') AS hora_inicio, 
                               DATE_FORMAT(hora_fin,'%H:%i:%s') AS hora_fin,
                               fecha
                        FROM eventos 
                        WHERE id_evento='$id_evento'";
                $respuesta = mysqli_query($conexion,$sql);
                return mysqli_fetch_all($respuesta,MYSQLI_ASSOC);
            } catch (Exception $e) {
                echo "No se a podido extraer los datos del registro: ".$e;
            }
        }

        public function actualizarEvento($data){
            try {
                $conexion = Conexion::conectar();
                $sql = "UPDATE eventos SET id_usuario=?, 
                                           evento_nombre=?, 
                                           hora_inicio=?,
                                           hora_fin=?,
                                           fecha=?
                        WHERE id_evento=?";
                $query = $conexion->prepare($sql);
                $query->bind_param('issssi', $data['id_usuario'],
                                             $data['evento_nombre'],
                                             $data['hora_inicio'],
                                             $data['hora_fin'],
                                             $data['fecha'],
                                             $data['id_evento']);
                return $query->execute();
            } catch (Exception $e) {
                echo "No se a podido actualizar el registro del evento: ".$e;
            }
        }

        public function mostrarInvitadosEvento($id_evento){
            try {
                $conexion = Conexion::conectar();
                $sql = "SELECT * FROM v_invitados 
                        WHERE idEvento='$id_evento'";
                $respuesta = mysqli_query($conexion, $sql);
                return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
            } catch (Exception $e) {
                echo "No se ha podido mostrar la lista de invitados de los eventos: ".$e;
            }
        }
    }
?>