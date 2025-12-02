<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "stock_elvisa";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_errno) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
