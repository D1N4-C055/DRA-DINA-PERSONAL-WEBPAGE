<?php
require 'conexion.php';
session_start();

$user = $_POST['userlog'] ?? '';
$pass = $_POST['passlog'] ?? '';

$stmt = $mysqli->prepare("SELECT Name, UserType FROM usuarios WHERE User = ? AND Password = ? LIMIT 1");
$stmt->bind_param('ss', $user, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows === 1) {
    $datos = $result->fetch_assoc();
    $_SESSION['usuario'] = $datos;
    echo json_encode(array('error' => false, 'tipo' => $datos['UserType']));
} else {
    echo json_encode(array('error' => true));
}

$stmt->close();
$mysqli->close();
?>