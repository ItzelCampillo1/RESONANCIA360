<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    $stmt = $conn->prepare('SELECT id, nombre, password, rol FROM usuarios WHERE email = ? AND rol = ? LIMIT 1');
    $stmt->bind_param('ss', $email, $rol);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nombre'];
            $_SESSION['user_rol'] = $user['rol'];
            header('Location: dashboard.php');
            exit;
        }
    }

    $_SESSION['error'] = 'Credenciales incorrectas';
    header('Location: index.php');
    exit;
}
?>
