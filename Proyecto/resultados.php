<!DOCTYPE html>
<html>
<head>
    <title>Resultados del Quiz</title>
</head>
<body>
    <h1>Resultados del Quiz</h1>
    <?php
    $puntaje = $_GET['puntaje'] ?? 0;
    echo "<p>Tu puntaje es: $puntaje / 3</p>";
    ?>
    <a href="../index.php">Volver al Inicio</a>
</body>
</html>