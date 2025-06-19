<?php

class Conexion {
    private $host = 'localhost';
    private $usuario = 'root';
    private $contrasena = '';
    private $base_datos = 'crud';

    function conecc_BD() {
        $this->conexion = new mysqli(
            $this->host,
            $this->usuario,
            $this->contrasena,
            $this->base_datos
        );

        if ($this->conexion->connect_error) {
            die('Error Al Conectar a BD: ' . $this->conexion->connect_error);
        }
        return $this->conexion;
    }
}
?>