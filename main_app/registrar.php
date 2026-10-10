<?php
require 'conexion.php';

$nombre = trim($_POST['nombre'] ?? '');
$apellidos = trim($_POST['apellidos'] ?? '');
$correo = trim($_POST['correo'] ?? '');
$usuario = trim($_POST['usuario'] ?? '');
$pass = trim($_POST['pass'] ?? '');
$pass2 = trim($_POST['pass2'] ?? '');

if ($pass !== $pass2) {
    echo '<script>alert("Las contraseñas no coinciden.");window.history.back();</script>';
    exit;
}

$stmt = $mysqli->prepare("INSERT INTO usuarios (Name, LastName, Email, User, Password, UserType) VALUES (?, ?, ?, ?, ?, 'User')");
$stmt->bind_param('sssss', $nombre, $apellidos, $correo, $usuario, $pass);

if (!$stmt->execute()) {
    echo '<script>alert("No fue posible registrar el usuario. Verifica la base de datos o si el usuario ya existe.");window.history.back();</script>';
} else {
    echo '<script>alert("Usuario registrado exitosamente");window.location.href = "../corpus.php";</script>';
}

$stmt->close();
$mysqli->close();
?>