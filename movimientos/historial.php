<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../usuarios/login.php");
    exit;
}
include "../conexion.php";

$sql = "SELECT m.fecha, m.tipo, m.cantidad, m.usuario, p.descripcion
        FROM movimientos m
        JOIN productos p ON m.id_producto = p.id
        ORDER BY m.fecha DESC";
$res = $conexion->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Historial de movimientos</title>
</head>
<body>
    <h2>Historial de movimientos</h2>
    <a href="../index.php">Volver al inicio</a><br><br>

    <table border="1" cellpadding="5">
        <tr>
            <th>Fecha</th>
            <th>Producto</th>
            <th>Tipo</th>
            <th>Cantidad</th>
            <th>Usuario</th>
        </tr>
        <?php while($m = $res->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $m['fecha']; ?></td>
            <td><?php echo $m['descripcion']; ?></td>
            <td><?php echo $m['tipo']; ?></td>
            <td><?php echo $m['cantidad']; ?></td>
            <td><?php echo $m['usuario']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
