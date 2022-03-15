<?php

function conectaBBDD(){
    $direccion = "localhost";
    $usuario_BBDD = "1234";
    $nombre_BBDD = "ejemploquiz";
    $password_BBDD = "LsGREhYQ0nM8kKfp";
    $puerto = "3306";

    $conexion = new mysqli($direccion, $usuario_BBDD, $password_BBDD, $nombre_BBDD, $puerto);

    $consulta = $conexion->query("SET_NAMES UTF8");
    return $conexion;
}

?>