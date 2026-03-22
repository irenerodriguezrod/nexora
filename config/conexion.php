<?php
// declarar variables
$host = "localhost";
$usuario = "root";
$pass = "";
$bd = "nexora";

function conectar()
{
    // usar var glob
    global $host, $usuario, $pass, $bd;
    // crear conexion
    $con = new mysqli($host, $usuario, $pass, $bd);

    //comprobar errores
    if ($con->connect_error) {
        die("Error de conexión: " . $con->connect_error); // die es para parar la ejecución si falla
    }
    return $con;
}
