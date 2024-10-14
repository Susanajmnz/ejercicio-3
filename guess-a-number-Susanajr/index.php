<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el Número</title>
</head>
<body>
    <h1>Adivina el Número</h1>
    <form method="post" action="juego.php">
        <label for="numero">Introduce un número (1-10):</label>
        <input type="number" id="numero" name="numero" min="1" max="10" required>
        <input type="hidden" name="intentos" value="0">
        <input type="hidden" name="numero_secreto" value="<?php echo rand(1, 10); ?>">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

