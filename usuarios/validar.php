<?php
session_start();
include "../conexion.php";

$usuario  = $_POST['usuario'] ?? '';
$password = $_POST['password'] ?? '';

$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' LIMIT 1";
$res = $conexion->query($sql);

if ($res && $res->num_rows == 1) {
    $row = $res->fetch_assoc();

    // Comparación simple (texto plano)
    if ($password === $row['password']) {
        $_SESSION['usuario'] = $row['usuario'];
        $_SESSION['rol']     = $row['rol'];
        header("Location: ../index.php");
        exit;
    }
}

echo "Usuario o contraseña incorrectos. <a href='login.php'>Volver</a>";
