<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="./src/css/index.css">
</head>
<body>
    <h2>Inicio de Sesión</h2>
    <form action="./src/auth/login.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>