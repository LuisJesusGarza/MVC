<!DOCTYPE html>
<html>
<head>
    <title>Adivina la Bandera</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
    <h1>Adivina Que Bandera Es </h1>
    <form id="quizForm" action="../controladores/controlador.php" method="post">
        <div class="pregunta">
            <p>¿Es esta la bandera de Francia?</p>
            <label>
                <input type="radio" name="respuesta1" value="verdadero"> Verdadero
            </label>
            <label>
                <input type="radio" name="respuesta1" value="falso"> Falso
            </label>
        </div>
        <div class="pregunta">
            <p>¿Es esta la bandera de Alemania?</p>
            <label>
                <input type="radio" name="respuesta2" value="verdadero"> Verdadero
            </label>
            <label>
                <input type="radio" name="respuesta2" value="falso"> Falso
            </label>
        </div>
        <div class="pregunta">
            <p>¿Es esta la bandera de España?</p>
            <label>
                <input type="radio" name="respuesta3" value="verdadero"> Verdadero
            </label>
            <label>
                <input type="radio" name="respuesta3" value="falso"> Falso
            </label>
        </div>
        <input type="submit" value="Enviar Respuestas">
    </form>
    <script src="../js/validaciones.js"></script>
</body>
</html>