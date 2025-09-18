<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Resonancia360 - Inicio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-container">
    <h1>Resonancia360</h1>
    <p class="frase">“Toda voz merece ser escuchada”</p>

    <?php if(!empty($_SESSION['error'])): ?>
      <div class="error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
    <?php endif; ?>

    <form action="login.php" method="post">
      <input type="email" name="email" placeholder="Correo" required>
      <input type="password" name="password" placeholder="Contraseña" required>
      <select name="rol" required>
        <option value="">Selecciona tu rol</option>
        <option value="cliente">Cliente</option>
        <option value="colaborador">Colaborador</option>
        <option value="admin">Administrador</option>
      </select>
      <button type="submit">Acceder</button>
    </form>

    <div class="extra">
      <a href="#">Retroalimentación anónima</a>
    </div>
  </div>
</body>
</html>
