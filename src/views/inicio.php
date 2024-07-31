<?php
require_once '../middleware/session.php';
validarSesion();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

$contenido = '';

if (isset($_POST['usuario'])) {
    ob_start();
    include '../static/user.html';
    $contenido = ob_get_clean();
}
if (isset($_POST['configuracion'])) {
    ob_start();
    include '../static/user.html';
    $contenido = ob_get_clean();
}

include 'layout.php';
?>
