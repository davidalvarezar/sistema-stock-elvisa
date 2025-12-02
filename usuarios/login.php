<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login - Stock ELVISA</title>
</head>
<body>
    <h2>Ingreso al sistema</h2>
    <form method="POST" action="validar.php">
        <label>Usuario:</label>
        <input type="text" name="usuario" required><br><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
