<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../usuarios/login.php");
    exit;
}
include "../conexion.php";

$productos = $conexion->query("SELECT * FROM productos WHERE estado = 1");
$mensaje = "";

if ($_POST) {
    $id_producto = (int)($_POST['producto'] ?? 0);
    $cantidad    = (int)($_POST['cantidad'] ?? 0);

    if ($id_producto > 0 && $cantidad > 0) {
        $res = $conexion->query("SELECT stock FROM productos WHERE id = $id_producto");
        $row = $res->fetch_assoc();
        $stock_actual = (int)$row['stock'];

        if ($stock_actual >= $cantidad) {
            $conexion->query("UPDATE productos SET stock = stock - $cantidad WHERE id = $id_producto");
            $usuario = $_SESSION['usuario'];
            $conexion->query("INSERT INTO movimientos (id_producto, tipo, cantidad, usuario)
                              VALUES ($id_producto, 'EGRESO', $cantidad, '$usuario')");
            $mensaje = "Egreso registrado correctamente.";
        } else {
            $mensaje = "No hay stock suficiente. Stock actual: $stock_actual.";
        }
    } else {
        $mensaje = "Datos inválidos.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Egreso de stock</title>
</head>
<body>
    <h2>Egreso de stock</h2>
    <a href="../index.php">Volver al inicio</a><br><br>

    <?php if ($mensaje) echo "<p>$mensaje</p>"; ?>

    <form method="POST">
        Producto:
        <select name="producto">
            <?php while($p = $productos->fetch_assoc()) { ?>
                <option value="<?php echo $p['id']; ?>">
                    <?php echo $p['descripcion']; ?> (Stock: <?php echo $p['stock']; ?>)
                </option>
            <?php } ?>
        </select>
        <br><br>
        Cantidad: <input type="number" name="cantidad" required><br><br>
        <button type="submit">Registrar egreso</button>
    </form>
</body>
</html>
