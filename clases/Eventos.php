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
    }

?>