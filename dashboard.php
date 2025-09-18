<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Dashboard - Resonancia360</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="dashboard">
    <h2>Bienvenid@, <?php echo htmlspecialchars($_SESSION['user_name']); ?></h2>
    <p>Rol: <?php echo htmlspecialchars($_SESSION['user_rol']); ?></p>
    <p><a href="logout.php">Cerrar sesión</a></p>
  </div>
</body>
</html>
