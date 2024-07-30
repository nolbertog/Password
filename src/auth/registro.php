<?php
require_once '../connection/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = mysqli_real_escape_string($link, trim($_POST['usuario']));
    $contrasena = password_hash(trim($_POST['contrasena']), PASSWORD_BCRYPT);
    $email = mysqli_real_escape_string($link, trim($_POST['email']));
    $rut = mysqli_real_escape_string($link, trim($_POST['rut']));
    $rol = 3;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email inválido.";
        exit;
    }

    $stmt = $link->prepare("INSERT INTO GC_USER (USERNAME, PASSWORD, EMAIL, RUT, ROL) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $usuario, $contrasena, $email, $rut, $rol);

    if ($stmt->execute()) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "ERROR: No se pudo ejecutar la consulta. " . $stmt->error;
    }

    $stmt->close();
    mysqli_close($link);
}
?>
