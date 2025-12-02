<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../usuarios/login.php");
    exit;
}
include "../conexion.php";

$res = $conexion->query("SELECT * FROM productos WHERE estado = 1");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>
<body>
    <h2>Listado de productos</h2>
    <a href="agregar.php">Agregar producto</a> |
    <a href="../index.php">Volver al inicio</a>
    <br><br>

    <table border="1" cellpadding="5">
        <tr>
            <th>Código</th>
            <th>Descripción</th>
            <th>Categoría</th>
            <th>Unidad</th>
            <th>Stock</th>
        </tr>
        <?php while($p = $res->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $p['codigo']; ?></td>
            <td><?php echo $p['descripcion']; ?></td>
            <td><?php echo $p['categoria']; ?></td>
            <td><?php echo $p['unidad']; ?></td>
            <td><?php echo $p['stock']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
