<?php
session_start();

function validarSesion() {
    if (!isset($_SESSION['usuario'])) {
        header('Location: ../../index.php');
        exit();
    }
}

validarSesion();
?>
