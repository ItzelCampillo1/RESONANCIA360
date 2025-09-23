<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Resonancia360</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        form { max-width: 500px; margin: auto; }
        label { display: block; margin-top: 15px; }
        input, textarea, select { width: 100%; padding: 8px; margin-top: 5px; }
        button { margin-top: 20px; padding: 10px 20px; }
    </style>
</head>
<body>
    <h2>Formulario de Contacto - Resonancia360</h2>
    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono">

        <label for="servicio">Servicio de interés:</label>
        <select id="servicio" name="servicio" required>
            <option value="">Seleccione...</option>
            <option value="resonancia">Resonancia Magnética</option>
            <option value="consultoria">Consultoría</option>
            <option value="otros">Otros</option>
        </select>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4"></textarea>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>