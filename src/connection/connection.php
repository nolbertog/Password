<?php
require_once 'config.php';

function iniciarSesion($usuario, $contrasena) {
    global $link;

    $usuario = mysqli_real_escape_string($link, $usuario);

    $query = "SELECT * FROM GC_USER WHERE USERNAME = BINARY '$usuario'";
    $result = mysqli_query($link, $query) or die('Consulta fallida: ' . mysqli_error($link));

    if (mysqli_num_rows($result) == 1) {
        $userData = mysqli_fetch_assoc($result);

        if (password_verify($contrasena, $userData['PASSWORD'])) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header('Location: ../views/inicio.php');
            exit();
        } else {
            echo "<script type='text/javascript'>
                    alert('Usuario o contraseña incorrectos');
                    window.location.href = '/';
                </script>";
        }
    } else {
        echo "<script type='text/javascript'>
                alert('Usuario o contraseña incorrectos');
                window.location.href = '/';
            </script>";
    }

    mysqli_free_result($result);
    mysqli_close($link);
}
?>
