<?php
require_once '../connection/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    iniciarSesion($usuario, $contrasena);
}
?>