<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../usuarios/login.php");
    exit;
}
include "../conexion.php";

$mensaje = "";

if ($_POST) {
    $codigo      = $_POST['codigo'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $categoria   = $_POST['categoria'] ?? '';
    $unidad      = $_POST['unidad'] ?? '';
    $stock_inicial = (int)($_POST['stock_inicial'] ?? 0);

    $sql = "INSERT INTO productos (codigo, descripcion, categoria, unidad, stock, estado)
            VALUES ('$codigo', '$descripcion', '$categoria', '$unidad', $stock_inicial, 1)";

    if ($conexion->query($sql)) {
        $id_producto = $conexion->insert_id;

        if ($stock_inicial > 0) {
            $usuario = $_SESSION['usuario'];
            $conexion->query("INSERT INTO movimientos (id_producto, tipo, cantidad, usuario)
                              VALUES ($id_producto, 'INGRESO', $stock_inicial, '$usuario')");
        }

        $mensaje = "Producto agregado correctamente.";
    } else {
        $mensaje = "Error al agregar: " . $conexion->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agregar producto</title>
</head>
<body>
    <h2>Agregar producto</h2>
    <a href="listar.php">Volver al listado</a>
    <br><br>

    <?php if ($mensaje) echo "<p>$mensaje</p>"; ?>

    <form method="POST">
        Código: <input type="text" name="codigo" required><br><br>
        Descripción: <input type="text" name="descripcion" required><br><br>
        Categoría: <input type="text" name="categoria"><br><br>
        Unidad: <input type="text" name="unidad"><br><br>
        Stock inicial: <input type="number" name="stock_inicial" value="0"><br><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
