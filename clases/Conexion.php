<?php

    class Conexion {

        public $servidor = 'localhost';
        public $usuario = 'root';
        public $contrasenia = '';
        public $base_datos = 'sistema_eventos_invitados';
        public $puerto = 3306;

        public function conectar(){
            return mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->contrasenia,
                $this->base_datos,
                $this->puerto
            );
        }

    }

?>