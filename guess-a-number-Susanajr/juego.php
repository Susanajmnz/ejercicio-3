<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado de tu intento</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero_jugador = intval($_POST['numero']);
        $numero_secreto = intval($_POST['numero_secreto']);
        $intentos = intval($_POST['intentos']) + 1;

        if ($numero_jugador < 1 || $numero_jugador > 10) {
            echo "<p>Por favor, introduce un número entre 1 y 10.</p>";
        } else {
            if ($numero_jugador === $numero_secreto) {
                echo "<p>¡Felicidades! Adivinaste el número secreto en $intentos intentos.</p>";
                echo "<a href='index.php'>Jugar de nuevo</a>";
                exit;
            } elseif ($intentos >= 5) {
                echo "<p>¡Lo siento! Has alcanzado el máximo de intentos. El número era $numero_secreto.</p>";
                echo "<a href='index.php'>Jugar de nuevo</a>";
                exit;
            } elseif ($numero_jugador < $numero_secreto) {
                echo "<p>El número es mayor. Te quedan " . (5 - $intentos) . " intentos.</p>";
            } else {
                echo "<p>El número es menor. Te quedan " . (5 - $intentos) . " intentos.</p>";
            }
        }
        echo "<form method='post' action='juego.php'>";
        echo "<label for='numero'>Introduce un número (1-10):</label>";
        echo "<input type='number' id='numero' name='numero' min='1' max='10' required>";
        echo "<input type='hidden' name='intentos' value='$intentos'>";
        echo "<input type='hidden' name='numero_secreto' value='$numero_secreto'>";
        echo "<button type='submit'>Enviar</button>";
        echo "</form>";
    }
    ?>
    <a href='reset.php'>Reiniciar el juego</a>
</body>
</html>

