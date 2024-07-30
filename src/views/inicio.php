<?php
require_once '../middleware/session.php';
validarSesion();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

$contenido = '';

if (isset($_POST['boton'])) {
    ob_start();
    include '../static/user.html';
    $contenido = ob_get_clean();
}

include 'layout.php';
?>
