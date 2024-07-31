<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="../css/inicio.css">
</head>
<body>
    <nav>
        <ul>
            <li id="titulo" ><h2>Technical</h2></head></li>
            <li><a href="inicio.php">Inicio</a></li>
            <li>
                <a href="#" onclick="document.getElementById('formMostrarContenido').submit(); return false;">Registrar usuario</a>
                <form id="formMostrarContenido" method="post" action="inicio.php" style="display: none;">
                    <input type="hidden" name="usuario" value="mostrar">
                </form>
            </li>
            <li><a href="#">Configuración</a></li>
            <li><a id="logout" href="../auth/logout.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h2>
    
    <?php echo isset($contenido) ? $contenido : ''; ?>

</body>
</html>
