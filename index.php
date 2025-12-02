<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: usuarios/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema de Stock - ELVISA</title>
</head>
<body>
    <h1>Sistema de Gestión de Stock - ELVISA</h1>
    <p>Usuario: <?php echo $_SESSION['usuario']; ?> (<?php echo $_SESSION['rol']; ?>)</p>

    <ul>
        <li><a href="productos/listar.php">Productos</a></li>
        <li><a href="movimientos/ingreso.php">Ingreso de stock</a></li>
        <li><a href="movimientos/egreso.php">Egreso de stock</a></li>
        <li><a href="movimientos/historial.php">Historial de movimientos</a></li>
        <li><a href="usuarios/logout.php">Cerrar sesión</a></li>
    </ul>
</body>
</html>
