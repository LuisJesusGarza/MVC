<?php
include_once('../modelos/modelo.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $modelo = new Modelo();
    $respuestas = $_POST;
    $puntaje = $modelo->calcularPuntaje($respuestas);
    header("Location:resultados.php?puntaje=$puntaje");
    exit();
}
?>